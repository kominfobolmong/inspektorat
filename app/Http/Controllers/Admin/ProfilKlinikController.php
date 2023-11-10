<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profil_Klinik;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProfilKlinikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Profil_Klinik::latest()->when(request()->q, function ($items) {
            $items = $items->where('title', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.klinik.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.klinik.create');
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
            'lampiran' => 'mimes:pdf',
            'title' => 'required|unique:profil__kliniks',
            'kategori' => 'required',
        ]);

        //upload image
        if ($request->file('image')) {
            $image = $request->file('image')->store('assets/profil_klinik', 'public');
        }

        if ($request->file('lampiran')) {
            $lampiran = $request->file('lampiran')->store('assets/profil_klinik/lampiran', 'public');
        }

        $data = Profil_Klinik::create([
            'image' => ($request->file('image')) ? $image : null,
            'lampiran' => ($request->file('lampiran')) ? $lampiran : null,
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'deskripsi' => $request->input('deskripsi'),
            'kategori' => $request->input('kategori'),
            'pinned' => ($request->input('pinned')) ? $request->input('pinned') : 'N',
        ]);

        if ($data) {
            //redirect dengan pesan sukses
            return redirect()->route('profil_klinik.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('profil_klinik.index')->with(['error' => 'Data Gagal Disimpan!']);
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
    public function edit(Profil_Klinik $profil_klinik)
    {
        return view('admin.klinik.edit', compact('profil_klinik'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profil_Klinik $profil_klinik)
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,jpg,png|max:2048',
            'lampiran' => 'mimes:pdf',
            'title' => 'required|unique:profil__kliniks,title,' . $profil_klinik->id,
            'kategori' => 'required',
        ]);

        //upload image
        if ($request->file('image')) {
            Storage::delete($profil_klinik->image);
            $image = $request->file('image')->store('assets/profil_klinik', 'public');
        }

        if ($request->file('lampiran')) {
            Storage::delete($profil_klinik->lampiran);
            $lampiran = $request->file('lampiran')->store('assets/profil_klinik/lampiran', 'public');
        }

        $data = Profil_Klinik::findOrFail($profil_klinik->id)->update([
            'image' => ($request->file('image')) ? $image : $profil_klinik->image,
            'lampiran' => ($request->file('lampiran')) ? $lampiran : $profil_klinik->lampiran,
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'deskripsi' => $request->input('deskripsi'),
            'kategori' => $request->input('kategori'),
            'pinned' => ($request->input('pinned')) ? $request->input('pinned') : $profil_klinik->pinned,
        ]);

        if ($data) {
            //redirect dengan pesan sukses
            return redirect()->route('profil_klinik.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('profil_klinik.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $data = Profil_Klinik::findOrFail($id);
        Storage::delete($data->image);
        Storage::delete($data->lampiran);
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
