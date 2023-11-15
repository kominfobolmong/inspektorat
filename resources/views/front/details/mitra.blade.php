@extends('front.app')

@section('title', 'Mitra')
@section('breadcrumb', 'Mitra')
@section('content')

<!-- breadcrumb-area -->
@include('front.details.breadcrumb')
<!-- breadcrumb-area-end -->

<section class="blog">
    <div class="container">
        <h4 class="text-center mb-100"><strong>Daftar Perusahaan sebagai Mitra/Stakeholder yang bekerjasama dengan Klinik Usaha Agribisnis Perkebunan:</strong></h4>
        <div class="row gx-0 justify-content-center">
            @foreach ($items as $item)
            <div class="col-lg-4 col-md-6">
                <div class="blog__post__item">
                    <div>
                        <img src="{{ Storage::url($item->logo) }}" alt="foto-mitra" class="img-fluid" style="object-fit: cover;object-position: center;width: 100%;height: 150px;" />
                    </div>
                    <div class="blog__post__content" style="height: 250px;">
                        <h3 class="small-title">{{ $item->nama_perusahaan }}</h3>
                        <h3 class="title">Direktur: {{ $item->nama_direktur }}</h3>
                        <button class="btn btn-primary mt-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom{{ $item->id }}" aria-controls="offcanvasBottom">Info Detail</button>
                    </div>
                </div>
            </div>

            <div class="offcanvas offcanvas-bottom" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1" id="offcanvasBottom{{ $item->id }}" aria-labelledby="offcanvasBottomLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasBottomLabel">Detail Mitra: {{ $item->nama_perusahaan }}</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ml-30">
                <ul>
                    <li class="mb-2"><strong>Bidang Usaha:</strong> {{ $item->bidang_usaha }}</li>
                    <li class="mb-2"><strong>Alamat:</strong> {{ $item->alamat }}</li>
                    <li class="mb-2"><strong>Wilayah Kerja:</strong> {{ $item->wilayah_kerja }}</li>
                    <li class="mb-2"><strong>Email:</strong> {{ $item->email }}</li>
                    <li class="mb-2"><strong>Telepon:</strong> {{ $item->telepon }}</li>
                    <li><strong>HP:</strong> {{ $item->no_hp }}</li>
                </ul>
            </div>
            </div>
            @endforeach
        </div>

        <div class="mt-30">
            {!! $items->links() !!}
        </div>

    </div>
</section>

{{-- <section class="about about__style__two">
    <div class="container">
        <p class="mb-100"><strong>Daftar Perusahaan sebagai Mitra/Stakeholder yang bekerjasama dengan Klinik Usaha Agribisnis Perkebunan:</strong></p>
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

                        {!! $items->links() !!}
                    </div>
    </div>
</section> --}}

@endsection
