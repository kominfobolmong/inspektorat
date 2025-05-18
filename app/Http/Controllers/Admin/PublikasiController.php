<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PublikasiController extends Controller
{
    /**
     * __construct
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware(['permission:publikasi.index|publikasi.create|publikasi.edit|publikasi.delete']);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publikasi = Publikasi::latest()->when(request()->q, function ($publikasi) {
            $publikasi = $publikasi->where('title', 'like', '%' . request()->q . '%');
        })->paginate(20);

        return view('admin.publikasi.index', compact('publikasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.publikasi.create');
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
            'title'       => 'required|unique:publikasis',
            'type'        => 'required',
            'deskripsi'   => 'required',
            'lampiran'    => 'mimes:pdf|max:20480', // 20480 KB = 20MB
        ]);

        if ($request->file('lampiran')) {
            $lampiran = $request->file('lampiran')->store('assets/publikasi', 'public');
        }

        $data = Publikasi::create([
            'title'       => $request->input('title'),
            'slug'        => strtolower(Str::slug($request->input('title') . '-' . time())),
            'type'        => $request->input('type'),
            'deskripsi'   => $request->input('deskripsi'),
            'lampiran'    => ($request->file('lampiran')) ? $lampiran : null,
        ]);

        if ($data) {
            return redirect()->route('publikasi.index')->with(['success' => 'Data Berhasil Disubmit!']);
        } else {
            return redirect()->route('publikasi.index')->with(['error' => 'Data Gagal Disubmit!']);
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
    public function edit(Publikasi $publikasi)
    {
        $types = ['riset', 'regulasi'];
        return view('admin.publikasi.edit', compact('publikasi', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publikasi $publikasi)
    {
        $this->validate($request, [
            'title'       => 'required|unique:publikasis,title,' . $publikasi->id,
            'type'        => 'required',
            'deskripsi'   => 'required',
            'lampiran'    => 'mimes:pdf|max:20480', // 20480 KB = 20MB
        ]);


        if ($request->file('lampiran')) {
            Storage::delete($publikasi->lampiran);
            $lampiran = $request->file('lampiran')->store('assets/publikasi', 'public');
        }

        $publikasi = Publikasi::findOrFail($publikasi->id);
        $publikasi->update([
            'title'       => $request->input('title'),
            'slug'        => strtolower(Str::slug($request->input('title') . '-' . time())),
            'type'        => $request->input('type'),
            'deskripsi'   => $request->input('deskripsi'),
            'lampiran'    => ($request->file('lampiran')) ? $lampiran : $publikasi->lampiran,
        ]);

        if ($publikasi) {
            return redirect()->route('publikasi.index')->with(['success' => 'Data Berhasil Disubmit!']);
        } else {
            return redirect()->route('publikasi.index')->with(['error' => 'Data Gagal Disubmit!']);
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
        $publikasi = Publikasi::findOrFail($id);
        Storage::delete($publikasi->lampiran);
        $publikasi->delete();

        if ($publikasi) {
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
