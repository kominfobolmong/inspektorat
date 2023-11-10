@extends('front.app')

@section('title', 'Profil Klinik UAP')

@section('content')

<section class="banner">
    <div class="container custom-container">
        <img src="{{ asset('templates/frontend/img/banner/KLINIK UAP.png') }}" class="img-fluid img-rounded" alt="banner-klinik">
    </div>
</section>

<section class="blog">
    <div class="container">
        <h4 class="text-center mt-50 mb-50">Konsep</h4><br>
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
        <h4 class="text-center mt-50 mb-50">Proses</h4><br>
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
        <h4 class="text-center mt-50 mb-50">Hasil</h4><br>
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
        <h4 class="text-center mt-50 mb-50">Pengembangan Klinik</h4><br>
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

