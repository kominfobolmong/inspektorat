<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Komoditas;
use App\Models\Penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class KomoditasController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:komoditas.index|komoditas.create|komoditas.edit|komoditas.delete']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Komoditas::latest()->when(request()->q, function ($items) {
            $items = $items->where('nama', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.komoditas.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penyakits = Penyakit::latest()->get();
        return view('admin.komoditas.create', compact('penyakits'));
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
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama' => 'required',
            'deskripsi' => 'required',
            'penyakit_id' => 'required',
        ]);

        //upload image
        if ($request->file('image')) {
            $image = $request->file('image')->store('assets/komoditas', 'public');
        }

        $data = Komoditas::create([
            'image' => ($request->file('image')) ? $image : null,
            'nama' => $request->input('nama'),
            'slug' => Str::slug($request->input('nama')),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        //assign penyakit
        $data->penyakits()->attach($request->input('penyakit_id'));
        $data->save();

        if ($data) {
            //redirect dengan pesan sukses
            return redirect()->route('komoditas.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('komoditas.index')->with(['error' => 'Data Gagal Disimpan!']);
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
    public function edit(Komoditas $komodita)
    {
        $penyakits = Penyakit::latest()->get();
        return view('admin.komoditas.edit', compact('komodita', 'penyakits'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Komoditas $komodita)
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,jpg,png|max:2048',
            'nama' => 'required',
            'deskripsi' => 'required',
            'penyakit_id' => 'required',
        ]);

        if ($request->file('image')) {
            Storage::delete($komodita->image);
            $image = $request->file('image')->store('assets/komoditas', 'public');
        }

        $data = Komoditas::findOrFail($komodita->id);
        $data->update([
            'nama' => $request->input('nama'),
            'slug' => Str::slug($request->input('nama')),
            'deskripsi'  => $request->input('deskripsi'),
            'image' => ($request->file('image')) ? $image : $komodita->image,
        ]);

        //assign
        $data->penyakits()->sync($request->input('penyakit_id'));
        // $data->save();

        if ($data) {
            //redirect dengan pesan sukses
            return redirect()->route('komoditas.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('komoditas.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $data = Komoditas::findOrFail($id);
        Storage::delete($data->image);
        $data->penyakits()->detach();
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
