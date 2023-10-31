@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Jenis Tanaman</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-tags"></i> Tambah Data</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('komoditas.store') }}" method="POST" enctype="multipart/form-data">
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
                            <label>NAMA</label>
                            <input type="text" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror">

                            @error('nama')
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
                            <div class="custom-switches-stacked mt-2">
                                <label class="custom-switch">
                                <input type="checkbox" name="is_unggulan" value="Y" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">Apakah Komoditas Termasuk Unggulan?</span>
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
