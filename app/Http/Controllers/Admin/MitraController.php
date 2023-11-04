<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mitras = Mitra::latest()->when(request()->q, function ($mitras) {
            $mitras = $mitras->where('nama_perusahaan', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.mitra.index', compact('mitras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mitra.create');
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
            'nama_perusahaan' => 'required',
            'nama_direktur' => 'required',
            'alamat' => 'required',
            'bidang_usaha' => 'required',
            'logo' => 'image|mimes:jpeg,jpg,png|max:2048'
        ]);

        if ($request->file('logo')) {
            $logo = $request->file('logo')->store('assets/mitra', 'public');
        }

        $data = Mitra::create([
            'nama_perusahaan' => $request->input('nama_perusahaan'),
            'nama_direktur' => $request->input('nama_direktur'),
            'alamat' => $request->input('alamat'),
            'bidang_usaha' => $request->input('bidang_usaha'),
            'email' => $request->input('email'),
            'telepon' => $request->input('telepon'),
            'no_hp' => $request->input('no_hp'),
            'logo' => ($request->file('logo')) ? $logo : null,
            'wilayah_kerja' => $request->input('wilayah_kerja'),
        ]);

        if ($data) {
            //redirect dengan pesan sukses
            return redirect()->route('mitra.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('mitra.index')->with(['error' => 'Data Gagal Disimpan!']);
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
    public function edit(Mitra $mitra)
    {
        return view('admin.mitra.edit', compact('mitra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mitra $mitra)
    {
        $this->validate($request, [
            'nama_perusahaan' => 'required',
            'nama_direktur' => 'required',
            'alamat' => 'required',
            'bidang_usaha' => 'required',
            'email' => 'unique:mitras,email,' . $mitra->id,
            'telepon' => 'unique:mitras,telepon,' . $mitra->id,
            'no_hp' => 'unique:mitras,no_hp,' . $mitra->id,
            'logo' => 'image|mimes:jpeg,jpg,png|max:2048'
        ]);

        if ($request->file('logo')) {
            Storage::delete($mitra->logo);
            $logo = $request->file('logo')->store('assets/mitra', 'public');
        }

        $data = Mitra::findOrFail($mitra->id)->update([
            'nama_perusahaan' => $request->input('nama_perusahaan'),
            'nama_direktur' => $request->input('nama_direktur'),
            'alamat' => $request->input('alamat'),
            'bidang_usaha' => $request->input('bidang_usaha'),
            'email' => $request->input('email'),
            'telepon' => $request->input('telepon'),
            'no_hp' => $request->input('no_hp'),
            'logo' => ($request->file('logo')) ? $logo : $mitra->logo,
            'wilayah_kerja' => $request->input('wilayah_kerja'),
        ]);

        if ($data) {
            //redirect dengan pesan sukses
            return redirect()->route('mitra.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('mitra.index')->with(['error' => 'Data Gagal Disimpan!']);
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
        $data = Mitra::findOrFail($id);
        Storage::delete($data->logo);
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
