@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Konsultasi</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-tags"></i> Edit Data</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('konsultasi.update', $konsultasi->id) }}" method="POST" enctype="multipart/form-data">
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

                            @if(Storage::disk('public')->exists($konsultasi->image ?? null))
                                <img src="{{ Storage::url($konsultasi->image ?? null) }}" width="200px" />
                            @endif
                        </div>

                        <div class="form-group">
                            <label>JUDUL</label>
                            <input type="text" name="title" value="{{ old('title', $konsultasi->title) }}" class="form-control @error('title') is-invalid @enderror">

                            @error('title')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>DESKRIPSI</label>
                            <textarea class="form-control content @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="10">{!! old('deskripsi', $konsultasi->deskripsi) !!}</textarea>
                            @error('deskripsi')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>KOMODITAS</label>
                            <select class="form-control select-category @error('komoditas_id') is-invalid @enderror"
                                name="komoditas_id">
                                <option value="">-- PILIH KOMODITAS --</option>
                                @foreach ($items as $item)
                                    @if($konsultasi->komoditas_id == $item->id)
                                        <option value="{{ $item->id  }}" selected>{{ $item->nama }}</option>
                                    @else
                                        <option value="{{ $item->id  }}">{{ $item->nama }}</option>
                                    @endif
                                @endforeach
                            </select>

                            @error('komoditas_id')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="custom-switches-stacked mt-2">
                                <label class="custom-switch">
                                <input type="checkbox" name="status" value="1" class="custom-switch-input" @if ($konsultasi->status === '1') checked @endif>
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">Beritahu sudah ditanggapi!</span>
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
