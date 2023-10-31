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
                    <h4><i class="fas fa-tags"></i> Edit Data</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('komoditas.update', $komodita->id) }}" method="POST" enctype="multipart/form-data">
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

                            @if(Storage::disk('public')->exists($komodita->image ?? null))
                                <img src="{{ Storage::url($komodita->image ?? null) }}" width="200px" />
                            @endif
                        </div>

                        <div class="form-group">
                            <label>NAMA</label>
                            <input type="text" name="nama" value="{{ old('nama', $komodita->nama) }}" class="form-control @error('nama') is-invalid @enderror">

                            @error('nama')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>DESKRIPSI</label>
                            <textarea class="form-control content @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="10">{!! old('deskripsi', $komodita->deskripsi) !!}</textarea>
                            @error('deskripsi')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="custom-switches-stacked mt-2">
                                <label class="custom-switch">
                                <input type="checkbox" name="is_unggulan" value="Y" class="custom-switch-input" @if ($komodita->is_unggulan === 'Y') checked @endif>
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
