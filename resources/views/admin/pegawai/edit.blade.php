@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Pegawai</h1>
            </div>

            <div class="section-body">

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-folder"></i> Edit Pegawai</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label>NAMA</label>
                                <input type="text" name="nama" value="{{ old('nama', $pegawai->nama) }}" class="form-control @error('nama') is-invalid @enderror">

                                @error('nama')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>NIP</label>
                                <input type="text" name="nip" value="{{ old('nip', $pegawai->nip) }}" class="form-control @error('nip') is-invalid @enderror">

                                @error('nip')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>JABATAN</label>
                                <select class="form-control select-category @error('jabatan_id') is-invalid @enderror"
                                    name="jabatan_id">
                                    <option value="">-- PILIH JABATAN --</option>
                                    @foreach ($jabatan as $item)
                                        @if($pegawai->jabatan_id == $item->id)
                                            <option value="{{ $item->id  }}" selected>{{ $item->nama }}</option>
                                        @else
                                            <option value="{{ $item->id  }}">{{ $item->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>

                                @error('jabatan_id')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>GOLONGAN</label>
                                <select class="form-control select-category @error('golongan_id') is-invalid @enderror"
                                    name="golongan_id">
                                    <option value="">-- PILIH GOLONGAN --</option>
                                    @foreach ($golongan as $item)
                                        @if($pegawai->golongan_id == $item->id)
                                            <option value="{{ $item->id  }}" selected>{{ $item->nama }}</option>
                                        @else
                                            <option value="{{ $item->id  }}">{{ $item->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>

                                @error('golongan_id')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>FOTO</label>
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">

                                @error('image')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror

                                @if(Storage::disk('public')->exists($pegawai->image ?? null))
                                    <img src="{{ Storage::url($pegawai->image ?? null) }}" width="200px" />
                                @endif
                            </div>

                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> SIMPAN</button>
                            <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
