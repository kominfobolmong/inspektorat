@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-user"></i> Tambah SDM</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('profpeg.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nama:</strong>
                                <input type="text" name="nama" value="{{ old('nama') }}"
                                    placeholder="Masukkan Nama"
                                    class="form-control @error('nama') is-invalid @enderror">

                                @error('nama')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>NIP:</strong>
                                <input type="text" name="nip" value="{{ old('nip') }}"
                                    placeholder="Masukkan NIP"
                                    class="form-control @error('nip') is-invalid @enderror">

                                @error('nip')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Jabatan:</strong>
                                <input type="text" name="jabatan" value="{{ old('jabatan') }}"
                                    placeholder="Masukkan Jabatan"
                                    class="form-control @error('jabatan') is-invalid @enderror">

                                @error('jabatan')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Whatsapp:</strong>
                                <input type="text" name="whatsapp" value="{{ old('whatsapp') }}"
                                    placeholder="Masukkan Whatsapp"
                                    class="form-control @error('whatsapp') is-invalid @enderror">

                                @error('whatsapp')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Foto:</strong>
                                <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror">

                                @error('foto')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            {{-- <div class="form-group">
                                <strong>Foto:</strong>
                                <input type="checkbox" name="is_customer_service" class="form-control @error('is_customer_service') is-invalid @enderror">

                                @error('is_customer_service')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div> --}}

                            <div class="form-group form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" name="is_customer_service" class="form-check-input" value="Y">Apakah pegawai  termasuk customer service?
                                </label>
                              </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a class="btn btn-light" href="{{ route('profpeg.index') }}">Batal</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop
