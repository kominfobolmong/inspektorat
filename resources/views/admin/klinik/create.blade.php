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
                    <h4><i class="fas fa-tags"></i> Tambah Data</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('profil_klinik.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>FOTO</label>
                            <p><strong>Ukuran foto tidak lebih dari 2mb</strong></p>
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">

                            @error('image')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>JUDUL</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror">

                            @error('title')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>DESKRIPSI</label>
                            <textarea class="form-control content @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="10">{!! old('deskripsi') !!}</textarea>

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
                                <option value="1">Konsep</option>
                                <option value="2">Proses</option>
                                <option value="3">Hasil</option>
                                <option value="4">Pengembangan</option>
                                <option value="5">Kebijakan</option>
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
                        </div>

                        <div class="form-group">
                            <div class="custom-switches-stacked mt-2">
                                <label class="custom-switch">
                                <input type="checkbox" name="pinned" value="Y" class="custom-switch-input">
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
