<?php

namespace App\Http\Controllers\Admin;

use App\Models\Profpeg;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProfpegController extends Controller
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['permission:profpegs.index|profpegs.create|profpegs.edit|profpegs.delete']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profpegs = Profpeg::latest()->when(request()->q, function ($profpegs) {
            $profpegs = $profpegs->where('nama', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.profpeg.index', compact('profpegs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profpeg.create');
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
            'nip' => 'required|unique:profpegs,nip',
            'jabatan' => 'required',
            'whatsapp' => 'unique:profpegs,whatsapp',
            'foto' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);

        //upload image
        if ($request->file('foto')) {
            $foto = $request->file('foto')->store('assets/sdm', 'public');
        }

        $data = Profpeg::create([
            'nama' => $request->input('nama'),
            'nip' => $request->input('nip'),
            'jabatan' => $request->input('jabatan'),
            'foto' => ($request->file('foto')) ? $foto : null,
            'whatsapp' => $request->input('whatsapp'),
            'is_customer_service' => ($request->input('is_customer_service')) ? 'Y' : 'N',
        ]);

        if ($data) {
            return redirect()->route('profpeg.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('profpeg.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function show(Profpeg $profpeg)
    {
        return view('admin.profpeg.show', compact('profpeg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profpeg  $profpeg
     * @return \Illuminate\Http\Response
     */
    public function edit(Profpeg $profpeg)
    {
        return view('admin.profpeg.edit', compact('profpeg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profpeg $profpeg)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'nip' => 'required'

        ]);

        $input = $request->all();

        if ($foto = $request->file('foto')) {
            $destinationPath = 'public/files';
            $profileFile = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileFile);
            $input['foto'] = "$profileFile";
        } else {
            unset($input['foto']);
        }

        $foto->update($input);

        if ($foto) {
            //redirect dengan pesan sukses
            return redirect()->route('profpeg.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('profpeg.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profpeg = Profpeg::findOrFail($id);
        $foto = Storage::disk('local')->delete('public/files' . $profpeg->foto);
        $profpeg->delete();

        if ($profpeg) {
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
