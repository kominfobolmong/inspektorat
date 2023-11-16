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
                        {{-- <span class="sub-title">DESKRIPSI SINGKAT</span> --}}
                        <h2 class="title">Apa Itu Layanan Informasi dan Manfaat Interkoneksi (LIMI) Agribisnis Perkebunan?</h2>
                    </div>
                    <div class="testimonial__active">
                        <div class="testimonial__item">
                            <div class="testimonial__content">
                                <div class="testimonial__icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>

                                <blockquote class="blockquote" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                                    <p>Layanan Informasi dan Manfaat Interkoneksi (LIMI) Agribisnis Perkebunan merupakan Layanan Informasi kepada semua <em>Stakeholders</em> perkebunan, baik kepada sesama instansi Pemerintah <em>(public sector)</em>, pelaku usaha <em>(private sector)</em>, mau pun kepada Masyarakat luas, khususnya Petani <em>(civil society)</em>, secara digital yang mudah diakses oleh para pemangku kepentingan.</p>
                                </blockquote><br>

                                {{-- <p style="font-family: Georgia, 'Times New Roman', Times, serif;">"Layanan Informasi dan Manfaat Interkoneksi (LIMI) Agribisnis Perkebunan merupakan Layanan Informasi kepada semua <em>Stakeholders</em> perkebunan, baik kepada sesama instansi Pemerintah <em>(public sector)</em>, pelaku usaha <em>(private sector)</em>, mau pun kepada Masyarakat luas, khususnya Petani <em>(civil society)</em>, secara digital yang mudah diakses oleh para pemangku kepentingan"</p><br> --}}

                                <blockquote class="blockquote" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                                    <p>LIMI Agribisnis Perkebunan terkoneksi dengan Klinik Usaha Agribisnis Perkebunan, guna meningkatkan kemudahan akses dan kualitas layanan Informasi praktis, <em>sharing</em> sumber daya dan Teknologi tepat guna dalam mengelola Agribisnis Perkebunan, dan secara berkelanjutan untuk <strong>meningkatkan pengetahuan, keterampilan, serta membentuk pola pikir dan pola sikap Petani menjadi cerdas, terampil dan produktif</strong> dalam mengembangkan usaha tani perkebunan secara berkelanjutan.</p>
                                  </blockquote><br>

                                <div class="testimonial__icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>

                                <div class="testimonial__avatar">
                                    <span><strong>Tonny S. Toligaga, S.Pt, MP</strong></span>
                                    <span style="font-size: 16px;font-weight: 400">Kepala Dinas Perkebunan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


 <!-- komoditas-area -->
    @include('front.section.komoditas')
 <!-- komoditas-area-end -->

 @include('front.section.penyakit_opt')

 <!-- artikel-area -->
 @include('front.section.artikel')
 <!-- artikel-area-end -->

 @include('front.section.infodata')

 <!-- konsultasi-area -->
 {{-- @include('front.section.konsultasi') --}}
 <!-- konsultasi-area-end -->

@endsection
