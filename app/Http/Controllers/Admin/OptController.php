<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Komoditas;
use App\Models\Opt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class OptController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['permission:penyakit.index|penyakit.create|penyakit.edit|penyakit.delete']);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Opt::latest()->when(request()->q, function ($items) {
            $items = $items->where('nama', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.opt.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Komoditas::get();
        return view('admin.opt.create', compact('items'));
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
            'nama' => 'required|unique:opts',
            'komoditas' => 'required',
        ]);

        //upload image
        if ($request->file('image')) {
            $image = $request->file('image')->store('assets/komoditas/opt', 'public');
        }

        $data = Opt::create([
            'image' => ($request->file('image')) ? $image : null,
            'nama' => $request->input('nama'),
            'slug' => Str::slug($request->input('nama')),
            'nama_ilmiah' => $request->input('nama_ilmiah'),
            'deskripsi' => $request->input('deskripsi'),
            'gejala' => $request->input('gejala'),
            'pengendalian' => $request->input('pengendalian'),
        ]);

        $data->komoditas()->attach($request->input('komoditas'));
        $data->save();

        if ($data) {
            //redirect dengan pesan sukses
            return redirect()->route('opt.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('opt.index')->with(['error' => 'Data Gagal Disimpan!']);
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
    public function edit(Opt $opt)
    {
        $items = Komoditas::get();
        return view('admin.opt.edit', compact('opt', 'items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Opt $opt)
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,jpg,png|max:2048',
            'nama' => 'required|unique:opts,nama,' . $opt->id,
            'komoditas' => 'required',
        ]);

        //upload image
        if ($request->file('image')) {
            Storage::delete($opt->image);
            $image = $request->file('image')->store('assets/komoditas/opt', 'public');
        }
        $data = Opt::findOrFail($opt->id);
        $data->update([
            'image' => ($request->file('image')) ? $image : $opt->image,
            'nama' => $request->input('nama'),
            'slug' => Str::slug($request->input('nama')),
            'nama_ilmiah' => $request->input('nama_ilmiah'),
            'deskripsi' => $request->input('deskripsi'),
            'gejala' => $request->input('gejala'),
            'pengendalian' => $request->input('pengendalian'),
        ]);

        $data->komoditas()->sync($request->input('komoditas'));

        if ($data) {
            //redirect dengan pesan sukses
            return redirect()->route('opt.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('opt.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $data = Opt::findOrFail($id);
        Storage::delete($data->image);
        $data->komoditas()->detach();
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
