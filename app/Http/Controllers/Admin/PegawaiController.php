<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Golongan;
use App\Models\Jabatan;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PegawaiController extends Controller
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['permission:pegawai.index|pegawai.create|pegawai.edit|pegawai.delete']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Pegawai::latest()->when(request()->q, function ($datas) {
            $datas = $datas->where('nama', 'like', '%' . request()->q . '%');
        })->paginate(15);

        return view('admin.pegawai.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = Jabatan::get();
        $golongan = Golongan::get();

        return view('admin.pegawai.create', compact('jabatan', 'golongan'));
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
            'nip' => 'required|numeric|unique:pegawais,nip',
            'jabatan_id' => 'required',
            'golongan_id' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png|max:2048',
        ]);

        if ($request->file('image')) {
            $image = $request->file('image')->store('assets/pegawai', 'public');
        }

        $data = Pegawai::create([
            'nama' => $request->input('nama'),
            'nip' => $request->input('nip'),
            'jabatan_id' => $request->input('jabatan_id'),
            'golongan_id' => $request->input('golongan_id'),
            'image'  => ($request->file('image')) ? $image : null,
        ]);

        if ($data) {
            return redirect()->route('pegawai.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('pegawai.index')->with(['error' => 'Data Gagal Disimpan!']);
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
    public function edit(Pegawai $pegawai)
    {
        $jabatan = Jabatan::get();
        $golongan = Golongan::get();

        return view('admin.pegawai.edit', compact('pegawai', 'jabatan', 'golongan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $this->validate($request, [
            'nama' => 'required',
            'nip' => 'required|numeric|unique:pegawais,nip,' . $pegawai->id,
            'jabatan_id' => 'required',
            'golongan_id' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png|max:2048',
        ]);

        if ($request->file('image')) {
            Storage::delete($pegawai->image);
            $image = $request->file('image')->store('assets/pegawai', 'public');
        }

        $data = Pegawai::findOrFail($pegawai->id)->update([
            'nama' => $request->input('nama'),
            'nip' => $request->input('nip'),
            'jabatan_id' => $request->input('jabatan_id'),
            'golongan_id' => $request->input('golongan_id'),
            'image' => ($request->file('image')) ? $image : $pegawai->image,
        ]);

        if ($data) {
            return redirect()->route('pegawai.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('pegawai.index')->with(['error' => 'Data Gagal Disimpan!']);
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
        $data = Pegawai::findOrFail($id);
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
