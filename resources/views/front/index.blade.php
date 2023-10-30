@extends('front.app')

@section('title', 'Beranda')

@section('content')

 <!-- banner-area -->
 @include('front.section.banner')
 <!-- banner-area-end -->

 <!-- layanan-area -->
 <section class="work__process">
    <div class="container">
        <div class="row work__process__wrap justify-content-between">
            <div class="col">
                <div class="work__process__item">
                    <span class="work__process_step">Klinik - 01</span>
                    <div class="work__process__icon">
                        <img class="light" src="{{ asset('templates/frontend/img/icons/services_light_icon03.png') }}" alt="">
                        <img class="dark" src="{{ asset('templates/frontend/img/icons/services_icon03.png') }}" alt="">
                    </div>
                    <div class="work__process__content">
                        <h4 class="title">Komoditas Unggulan</h4>
                        <p>Ketahui pengertian, penyakit, pencegahan serta pemulihan dari jenis komoditi</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="work__process__item">
                    <span class="work__process_step">Klinik - 02</span>
                    <div class="work__process__icon">
                        <img class="light" src="{{ asset('templates/frontend/img/icons/wp_light_icon01.png') }}" alt="">
                        <img class="dark" src="{{ asset('templates/frontend/img/icons/wp_icon01.png') }}" alt="">
                    </div>
                    <div class="work__process__content">
                        <h4 class="title">Artikel Perkebunan</h4>
                        <p>Ketahui update, tips terbaru artikel tentang perkebunan</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="work__process__item">
                    <span class="work__process_step">Klinik - 03</span>
                    <div class="work__process__icon">
                        <img class="light" src="{{ asset('templates/frontend/img/icons/wp_light_icon04.png') }}" alt="">
                        <img class="dark" src="{{ asset('templates/frontend/img/icons/wp_icon04.png') }}" alt="">
                    </div>
                    <div class="work__process__content">
                        <h4 class="title">Konsultasi Online</h4>
                        <p>Temukan solusi pada tanaman anda. Kami siap menjawab pertanyaan anda</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- layanan-area-end -->


 <!-- komoditas-area -->
    @include('front.section.komoditas')
 <!-- komoditas-area-end -->

 <!-- artikel-area -->
 @include('front.section.artikel')
 <!-- artikel-area-end -->

 @include('front.section.infodata')

 <!-- konsultasi-area -->
 {{-- @include('front.section.konsultasi') --}}
 <!-- konsultasi-area-end -->

@endsection
