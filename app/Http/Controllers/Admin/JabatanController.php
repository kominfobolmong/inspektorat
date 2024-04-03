<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['permission:jabatan.index|jabatan.create|jabatan.edit|jabatan.delete']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Jabatan::when(request()->q, function ($datas) {
            $datas = $datas->where('nama', 'like', '%' . request()->q . '%');
        })->orderBy('kode', 'asc')->paginate(15);

        return view('admin.jabatan.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jabatan.create');
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
            'nama' => 'required',
            'kode' => 'required|unique:jabatans,kode',
        ]);

        $data = Jabatan::create([
            'nama' => $request->input('nama'),
            'kode' => $request->input('kode'),
        ]);

        if ($data) {
            return redirect()->route('jabatan.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('jabatan.index')->with(['error' => 'Data Gagal Disimpan!']);
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
    public function edit(Jabatan $jabatan)
    {
        return view('admin.jabatan.edit', compact('jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jabatan $jabatan)
    {
        $this->validate($request, [
            'nama' => 'required',
            'kode' => 'required|unique:jabatans,kode,' . $jabatan->id,
        ]);

        $data = Jabatan::findOrFail($jabatan->id)->update([
            'nama' => $request->input('nama'),
            'kode' => $request->input('kode'),
        ]);

        if ($data) {
            return redirect()->route('jabatan.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('jabatan.index')->with(['error' => 'Data Gagal Disimpan!']);
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
        $data = Jabatan::findOrFail($id);
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
