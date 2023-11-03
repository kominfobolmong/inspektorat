@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Jenis Penyakit</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-tags"></i> Edit Data</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('penyakit.update', $penyakit->id) }}" method="POST" enctype="multipart/form-data">
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

                            @if(Storage::disk('public')->exists($penyakit->image ?? null))
                                <img src="{{ Storage::url($penyakit->image ?? null) }}" width="200px" />
                            @endif
                        </div>

                        <div class="form-group">
                            <label>NAMA</label>
                            <input type="text" name="nama" value="{{ old('nama', $penyakit->nama) }}" class="form-control @error('nama') is-invalid @enderror">

                            @error('nama')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>NAMA ILMIAH</label>
                            <input type="text" name="nama_ilmiah" value="{{ old('nama_ilmiah', $penyakit->nama_ilmiah) }}" class="form-control @error('nama_ilmiah') is-invalid @enderror">

                            @error('nama_ilmiah')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>DESKRIPSI</label>
                            <textarea class="form-control content @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="10">{!! old('deskripsi', $penyakit->deskripsi) !!}</textarea>
                            @error('deskripsi')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>PENYEBAB</label>
                            <textarea class="form-control content @error('penyebab') is-invalid @enderror" name="penyebab" rows="10">{!! old('penyebab', $penyakit->penyebab) !!}</textarea>
                            @error('penyebab')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>GEJALA SERANGAN</label>
                            <textarea class="form-control content @error('gejala') is-invalid @enderror" name="gejala" rows="10">{!! old('gejala', $penyakit->gejala) !!}</textarea>
                            @error('gejala')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>PENGENDALIAN</label>
                            <textarea class="form-control content @error('pengendalian') is-invalid @enderror" name="pengendalian" rows="10">{!! old('pengendalian', $penyakit->pengendalian) !!}</textarea>
                            @error('pengendalian')
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
                                    @if($penyakit->komoditas_id == $item->id)
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
