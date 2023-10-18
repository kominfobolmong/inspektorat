<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PenyakitController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:penyakit.index|penyakit.create|penyakit.edit|penyakit.delete']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Penyakit::latest()->when(request()->q, function($items) {
            $items = $items->where('nama', 'like', '%'. request()->q . '%');
        })->paginate(10);

        return view('admin.penyakit.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.penyakit.create');
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
            'nama' => 'required|unique:penyakits'
        ]);

        $data = Penyakit::create([
            'nama' => $request->input('nama'),
            'slug' => Str::slug($request->input('nama'), '-'),
            'body' => $request->input('body')
        ]);

        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('penyakit.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('penyakit.index')->with(['error' => 'Data Gagal Disimpan!']);
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
    public function edit(Penyakit $penyakit)
    {
        return view('admin.penyakit.edit', compact('penyakit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penyakit $penyakit)
    {
        $this->validate($request, [
            'nama' => 'required|unique:penyakits,nama,'.$penyakit->id
        ]);

        $data = Penyakit::findOrFail($penyakit->id);
        $data->update([
            'nama' => $request->input('nama'),
            'slug' => Str::slug($request->input('nama'), '-'),
            'body' => $request->input('body')
        ]);

        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('penyakit.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('penyakit.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $data = Penyakit::findOrFail($id);
        $data->delete();

        if($data){
            return response()->json([
                'status' => 'success'
            ]);
        }else{
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
}
