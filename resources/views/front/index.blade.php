@extends('front.app')

@section('title', 'Beranda')

@section('content')

 <!-- banner-area -->
 @include('front.section.banner')
 <!-- banner-area-end -->

<section class="testimonial">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="testimonial__wrap">
                    <div class="section__title">
                        <h2 class="title"></h2>
                    </div>
                    <div class="testimonial__active">
                        <div class="testimonial__item">
                            <div class="testimonial__content">
                                <div class="testimonial__icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>

                                <blockquote class="blockquote" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                                    <p>Assalamualaikum Warahmatullahi Wabarakatuh <br><br>
                                        Di Era digitalisasi kebutuhan akan informasi merupakan salah satu kebutuhan pokok. Masyarakat yang berperilaku mobile membutuhkan saluran komunikasi yang real time. Untuk itu Inspektorat Daerah telah membentuk suatu wadah berupa website Inspektorat  Kabupaten Bolaang Mongondow, sebagai media komunikasi dalam memenuhi kebutuhan dimaksud.
                                        Semoga keberadaan Website ini dapat memberikan manfaat bagi kita semua. <br><br>Wassalamu’alaikum Warahmatullahi Wabarakatuh</p>
                                </blockquote><br>

                                <div class="testimonial__icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>

                                <div class="testimonial__avatar">
                                    <span><strong>Rio A. Lombone, S.STP.,MH.,CGCAE.,QGIA.,CRGP.,CFrA.,CSEP</strong></span>
                                    <span style="font-size: 16px;font-weight: 400">Inspektur Kab. Bolaang Mongondow</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 <!-- artikel-area -->
 @include('front.section.artikel')
 <!-- artikel-area-end -->

 @include('front.section.publikasi')


 {{-- @include('front.section.infodata') --}}

 <!-- konsultasi-area -->
 {{-- @include('front.section.konsultasi') --}}
 <!-- konsultasi-area-end -->

@endsection
