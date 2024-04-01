<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Golongan;
use Illuminate\Http\Request;

class GolonganController extends Controller
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['permission:golongan.index|golongan.create|golongan.edit|golongan.delete']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Golongan::latest()->when(request()->q, function ($datas) {
            $datas = $datas->where('nama', 'like', '%' . request()->q . '%');
        })->paginate(15);

        return view('admin.golongan.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.golongan.create');
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
            'nama' => 'required|unique:golongans,nama',
        ]);

        $data = Golongan::create([
            'nama' => $request->input('nama'),
        ]);

        if ($data) {
            return redirect()->route('golongan.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('golongan.index')->with(['error' => 'Data Gagal Disimpan!']);
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
    public function edit(Golongan $golongan)
    {
        return view('admin.golongan.edit', compact('golongan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Golongan $golongan)
    {
        $this->validate($request, [
            'nama' => 'required|unique:golongans,nama,' . $golongan->id,
        ]);

        $data = Golongan::findOrFail($golongan->id)->update([
            'nama' => $request->input('nama'),
        ]);

        if ($data) {
            return redirect()->route('golongan.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('golongan.index')->with(['error' => 'Data Gagal Disimpan!']);
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
        $data = Golongan::findOrFail($id);
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
