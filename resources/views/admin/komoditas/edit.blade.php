@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Komoditas</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-tags"></i> Edit Komoditas</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('komoditas.update', $komodita->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>IMAGE</label>
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                        </div>

                        <div class="form-group">
                            <label>NAMA</label>
                            <input type="text" name="nama" value="{{ old('nama', $komodita->nama) }}"
                                placeholder="Masukkan nama"
                                class="form-control @error('nama') is-invalid @enderror">


                            @error('nama')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>DESKRIPSI</label>
                            <textarea class="form-control content @error('deskripsi') is-invalid @enderror" name="deskripsi"
                                placeholder="Masukkan deskripsi"
                                rows="10">{!! old('deskripsi', $komodita->deskripsi) !!}</textarea>
                            @error('deskripsi')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">PENYAKIT</label>
                            <select class="form-control" name="penyakit_id[]"
                                multiple="multiple">
                                @foreach ($penyakits as $penyakit)
                                    <option value="{{$penyakit->id}}" {{ in_array($penyakit->id, $komodita->penyakits()->pluck('id')->toArray()) ? 'selected' : '' }}> {{ $penyakit->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                            UPDATE</button>
                        <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

@stop
