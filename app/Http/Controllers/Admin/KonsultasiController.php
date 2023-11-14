<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Komoditas;
use App\Models\Konsultasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class KonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Konsultasi::latest()->when(request()->q, function ($items) {
            $items = $items->where('title', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.konsultasi.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Komoditas::get();
        return view('admin.konsultasi.create', compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|unique:konsultasis',
            'komoditas_id' => 'required',
        ]);

        //upload image
        if ($request->file('image')) {
            $image = $request->file('image')->store('assets/konsultasi', 'public');
        }

        $data = Konsultasi::create([
            'image' => ($request->file('image')) ? $image : null,
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'deskripsi' => $request->input('deskripsi'),
            'komoditas_id' => $request->input('komoditas_id'),
            'status' => ($request->input('status')) ? ($request->input('status')) : '0',
        ]);

        if ($data) {
            //redirect dengan pesan sukses
            return redirect()->route('konsultasi.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('konsultasi.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Konsultasi $konsultasi)
    {
        $items = Komoditas::get();
        return view('admin.konsultasi.edit', compact('konsultasi', 'items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Konsultasi $konsultasi)
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|unique:konsultasis,title,' . $konsultasi->id,
            'komoditas_id' => 'required',
        ]);

        //upload image
        if ($request->file('image')) {
            Storage::delete($konsultasi->image);
            $image = $request->file('image')->store('assets/konsultasi', 'public');
        }

        $data = Konsultasi::findOrFail($konsultasi->id)->update([
            'image' => ($request->file('image')) ? $image : $konsultasi->image,
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'deskripsi' => $request->input('deskripsi'),
            'komoditas_id' => $request->input('komoditas_id'),
            'status' => ($request->input('status')) ? ($request->input('status')) : $konsultasi->status,
        ]);

        if ($data) {
            //redirect dengan pesan sukses
            return redirect()->route('konsultasi.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('konsultasi.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Konsultasi::findOrFail($id);
        Storage::delete($data->image);
        $data->delete();

        if ($data) {
            return response()->json([
                'status' => 'success'
            ]);
        } else {
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
}
