@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Profil Klinik</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-tags"></i> Edit Data</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('profil_klinik.update', $profil_klinik->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>FOTO</label>
                            <p><strong>Ukuran foto tidak lebih dari 2mb</strong></p>
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">

                            @error('image')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror

                            @if(Storage::disk('public')->exists($profil_klinik->image ?? null))
                                <br><img src="{{ Storage::url($profil_klinik->image ?? null) }}" width="200px" />
                            @endif
                        </div>

                        <div class="form-group">
                            <label>JUDUL</label>
                            <input type="text" name="title" value="{{ old('title', $profil_klinik->title) }}" class="form-control @error('title') is-invalid @enderror">

                            @error('title')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>DESKRIPSI</label>
                            <textarea class="form-control content @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="10">{!! old('deskripsi', $profil_klinik->deskripsi) !!}</textarea>

                            @error('deskripsi')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>KATEGORI</label>
                            <select class="form-control select-category @error('kategori') is-invalid @enderror"
                                name="kategori">
                                <option value="">-- PILIH KATEGORI --</option>
                                <option value="1" @if ($profil_klinik->kategori === '1') selected @endif>Konsep</option>
                                <option value="2" @if ($profil_klinik->kategori === '2') selected @endif>Proses</option>
                                <option value="3" @if ($profil_klinik->kategori === '3') selected @endif>Hasil</option>
                                <option value="4" @if ($profil_klinik->kategori === '4') selected @endif>Pengembangan</option>
                                <option value="5" @if ($profil_klinik->kategori === '5') selected @endif>Kebijakan</option>
                            </select>

                            @error('kategori')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>LAMPIRAN</label>
                            <input type="file" name="lampiran" class="form-control @error('lampiran') is-invalid @enderror">

                            @error('lampiran')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror

                            @if(Storage::disk('public')->exists($profil_klinik->lampiran ?? null))
                                <br><object data="{{ Storage::url($profil_klinik->lampiran ?? null) }}" type="application/pdf" width="300" height="400">

                                    <embed src="{{ Storage::url($profil_klinik->lampiran ?? null) }}" type="application/pdf">

                                </object>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="custom-switches-stacked mt-2">
                                <label class="custom-switch">
                                <input type="checkbox" name="pinned" value="Y" class="custom-switch-input" @if ($profil_klinik->kategori === 'Y') checked @endif>
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">Sematkan</span>
                                </label>
                            </div>
                        </div>

                        <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                            SIMPAN</button>
                        <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

@stop
