@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>OPT/Hama</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-tags"></i> Edit Data</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('opt.update', $opt->id) }}" method="POST" enctype="multipart/form-data">
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

                            @if(Storage::disk('public')->exists($opt->image ?? null))
                                <img src="{{ Storage::url($opt->image ?? null) }}" width="200px" />
                            @endif
                        </div>

                        <div class="form-group">
                            <label>NAMA</label>
                            <input type="text" name="nama" value="{{ old('nama', $opt->nama) }}" class="form-control @error('nama') is-invalid @enderror">

                            @error('nama')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>NAMA ILMIAH</label>
                            <input type="text" name="nama_ilmiah" value="{{ old('nama_ilmiah', $opt->nama_ilmiah) }}" class="form-control @error('nama_ilmiah') is-invalid @enderror">

                            @error('nama_ilmiah')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>DESKRIPSI</label>
                            <textarea class="form-control content @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="10">{!! old('deskripsi', $opt->deskripsi) !!}</textarea>
                            @error('deskripsi')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>GEJALA SERANGAN</label>
                            <textarea class="form-control content @error('gejala') is-invalid @enderror" name="gejala" rows="10">{!! old('gejala', $opt->gejala) !!}</textarea>
                            @error('gejala')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>PENGENDALIAN</label>
                            <textarea class="form-control content @error('pengendalian') is-invalid @enderror" name="pengendalian" rows="10">{!! old('pengendalian', $opt->pengendalian) !!}</textarea>
                            @error('pengendalian')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>KOMODITAS</label>
                            <select class="form-control @error('komoditas') is-invalid @enderror"
                                name="komoditas[]" multiple="multiple">
                                @foreach ($items as $item)
                                    <option value="{{$item->id}}" {{ in_array($item->id, $opt->komoditas()->pluck('id')->toArray()) ? 'selected' : '' }}> {{ $item->nama }}</option>
                                @endforeach
                            </select>

                            @error('komoditas')
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
