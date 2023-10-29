@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Mitra</h1>
            </div>

            <div class="section-body">

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-users"></i> Edit Mitra</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('mitra.update', $mitra->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="nama_perusahaan">NAMA PERUSAHAAN</label>
                                <input type="text" name="nama_perusahaan" id="nama_perusahaan" value="{{ old('nama_perusahaan', $mitra->nama_perusahaan) }}" class="form-control @error('nama_perusahaan') is-invalid @enderror">

                                @error('nama_perusahaan')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="nama_direktur">NAMA DIREKTUR</label>
                                <input type="text" name="nama_direktur" id="nama_direktur" value="{{ old('nama_direktur', $mitra->nama_direktur) }}" class="form-control @error('nama_direktur') is-invalid @enderror">

                                @error('nama_direktur')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="bidang_usaha">BIDANG USAHA</label>
                                <input type="text" name="bidang_usaha" id="bidang_usaha" value="{{ old('bidang_usaha', $mitra->bidang_usaha) }}" class="form-control @error('bidang_usaha') is-invalid @enderror">

                                @error('bidang_usaha')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="alamat">ALAMAT</label>
                                <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat', $mitra->alamat) }}</textarea>

                                @error('alamat')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">EMAIL (opsional)</label>
                                <input type="email" name="email" value="{{ old('email', $mitra->email) }}" class="form-control @error('email') is-invalid @enderror">

                                @error('email')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="telepon">TELEPON (opsional)</label>
                                <input type="text" name="telepon" value="{{ old('telepon', $mitra->telepon) }}" class="form-control @error('telepon') is-invalid @enderror">

                                @error('telepon')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
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
