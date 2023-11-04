@extends('front.app')

@section('title', 'Mitra')
@section('breadcrumb', 'Mitra')
@section('content')

<!-- breadcrumb-area -->
@include('front.details.breadcrumb')
<!-- breadcrumb-area-end -->

<section class="about about__style__two">
    <div class="container">
        <p class="mb-100"><strong>Daftar Perusahaan sebagai Mitra/Stakeholder yang bekerjasama dengan Klinik Usaha Agribisnis Perkebunan:</strong></p>
        {{-- <div class="row"> --}}
            {{-- <div class="col-12"> --}}
                {{-- <div class="about__info__wrap"> --}}
                    <div class="about__education__wrap">
                        <div class="row">
                            @foreach ($items as $item)
                            <div class="col-md-4 col-sm-6">
                                <div
                                    class="about__education__item shadow"
                                >
                                    <img src="{{ Storage::url($item->logo) }}" class="img-fluid mb-15" width="200" alt="logo-perusahaan">
                                    <h3 class="title">
                                        {{ $item->nama_perusahaan }}
                                    </h3>
                                    {{-- <span class="date"
                                        >2004 – 2016</span
                                    > --}}
                                    <ul>
                                        <li><strong>Nama Direktur:</strong> {{ $item->nama_direktur }}</li>
                                        <li class="mb-2"><strong>Bidang Usaha:</strong> <br>{{ $item->bidang_usaha }}</li>
                                        <li class="mb-2"><strong>Alamat:</strong> <br>{{ $item->alamat }}</li>
                                        <li class="mb-3"><strong>Wilayah Kerja:</strong><br> {{ $item->wilayah_kerja }}</li>
                                        <li><strong>Email:</strong> {{ $item->email }}</li>
                                        <li><strong>Telepon:</strong> {{ $item->telepon }}</li>
                                        <li><strong>HP:</strong> {{ $item->no_hp }}</li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                {{-- </div> --}}
            {{-- </div> --}}
        {{-- </div> --}}
    </div>
</section>

@endsection
