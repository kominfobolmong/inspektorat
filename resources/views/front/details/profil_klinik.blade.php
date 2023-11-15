@extends('front.app')

@section('title', 'Profil Klinik UAP')

@section('content')

<section class="banner">
    <div class="container custom-container">
        <img src="{{ asset('templates/frontend/img/banner/KLINIK UAP.png') }}" class="img-fluid img-rounded" alt="banner-klinik">
    </div>
</section>

<section class="testimonial">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="testimonial__wrap">
                    <div class="section__title">
                        {{-- <span class="sub-title">DESKRIPSI SINGKAT</span> --}}
                        <h2 class="title">Sekilas Tentang Klinik Usaha Agribisnis Perkebunan (KUAP)</h2>
                    </div>
                    <div class="testimonial__active">
                        <div class="testimonial__item">
                            <div class="testimonial__content">
                                <div class="testimonial__icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <p>Klinik Usaha Agribisnis Perkebunan, merupakan sebuah rangkaian kegiatan terintegrasi dalam suatu wadah kelembagaan yang akan menjadi pusat pelayanan informasi dan teknologi, media interaksi antar pemangku kepentingan <em>(stakeholders)</em>,  pengembangan pengetahuan dan keterampilan petani, pembinaan kelembagaan, peningkatan ketahanan dan kemandirian usaha tani,  serta membantu dalam identifikasi sampai dengan pemilihan tindakan penyelesaian permasalahan yang dihadapi oleh petani pelaku agribisnis perkebunan, guna meningkatkan konsistensi petani dalam mengembangkan usaha agribisnis perkebunan secara produktif, mandiri dan berkelanjutan.</p><br>
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

<section class="blog">
    <div class="container">
        <div class="alert alert-info" role="alert">
            <h4 class="text-center">KONSEP</h4>
        </div>
        <div class="row gx-0 justify-content-center">
            @foreach ($konsep as $item)
            <div class="col-lg-4 col-md-6">
                <div class="blog__post__item">
                    {{-- <div class="blog__post__thumb">
                        <a href="{{ route('artikel-detail', $item->slug) }}"><img src="{{ $item->image }}" class="img-fluid rounded" alt="image-artikel"></a>
                    </div> --}}
                    <div class="blog__post__content">
                        <span class="date">{{ $item->created_at->diffForHumans() }}</span>
                        <h3 class="title"><a href="{{ route('profil_klinik_detail', $item->slug) }}">{{ $item->title }}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{-- <div class="blog__button text-center">
            <a href="{{ route('artikel') }}" class="btn">Lihat Lainnya</a>
        </div> --}}
    </div>
</section>

<section class="blog">
    <div class="container">
        <div class="alert alert-info" role="alert">
            <h4 class="text-center">PROSES</h4>
        </div>
        <div class="row gx-0 justify-content-center">
            @foreach ($proses as $item)
            <div class="col-lg-4 col-md-6">
                <div class="blog__post__item">
                    <div class="blog__post__content">
                        <span class="date">{{ $item->created_at->diffForHumans() }}</span>
                        <h3 class="title"><a href="{{ route('profil_klinik_detail', $item->slug) }}">{{ $item->title }}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="blog">
    <div class="container">
        <div class="alert alert-info" role="alert">
            <h4 class="text-center">HASIL</h4>
        </div>
        <div class="row gx-0 justify-content-center">
            @foreach ($hasil as $item)
            <div class="col-lg-4 col-md-6">
                <div class="blog__post__item">
                    <div class="blog__post__content">
                        <span class="date">{{ $item->created_at->diffForHumans() }}</span>
                        <h3 class="title"><a href="{{ route('profil_klinik_detail', $item->slug) }}">{{ $item->title }}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="blog">
    <div class="container">
        <div class="alert alert-info" role="alert">
            <h4 class="text-center">PENGEMBANGAN KLINIK</h4>
        </div>
        <div class="row gx-0 justify-content-center">
            @foreach ($pengembangan as $item)
            <div class="col-lg-4 col-md-6">
                <div class="blog__post__item">
                    <div class="blog__post__content">
                        <span class="date">{{ $item->created_at->diffForHumans() }}</span>
                        <h3 class="title"><a href="{{ route('profil_klinik_detail', $item->slug) }}">{{ $item->title }}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


@endsection

