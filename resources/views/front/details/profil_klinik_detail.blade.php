@extends('front.app')

@section('title', 'Detail Info')
@section('breadcrumb', 'Detail Info')
@section('content')

<!-- breadcrumb-area -->
@include('front.details.breadcrumb')
<!-- breadcrumb-area-end -->

<section class="standard__blog blog__details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="standard__blog__post">
                    <div class="standard__blog__thumb">
                        @if(Storage::disk('public')->exists($item->image ?? null))
                            <img src="{{ Storage::url($item->image ?? null) }}" alt="image" />
                        @endif
                    </div>
                    <div class="blog__details__content services__details__content">
                        <ul class="blog__post__meta">
                            <li><i class="fal fa-calendar-alt"></i> {{ $item->created_at->diffForHumans() }}</li>
                            {{-- <li class="post-share"><a href="#"><i class="fal fa-eye"></i> ({{ \App\Models\News::withTotalVisitCount()->first()->visit_count_total }})</a></li> --}}
                        </ul>
                        <h2 class="title">{{ Str::title($item->title) ?? null }}</h2>
                        <p>{!! $item->deskripsi ?? null !!}</p>

                        <br><strong>LAMPIRAN</strong><br>

                        @if(Storage::disk('public')->exists($item->lampiran ?? null))
                            <br><object data="{{ Storage::url($item->lampiran ?? null) }}" type="application/pdf" class="w-100" height="600">

                                <embed src="{{ Storage::url($item->lampiran ?? null) }}" type="application/pdf">

                            </object>
                        @endif

                    </div>
                    <div class="blog__details__bottom">
                        <ul class="blog__details__tag">
                            <li class="title">Kategori:</li>
                            <li class="tags-list">
                                @if ($item->kategori === '1')
                                    <a href="#">Konsep</a>
                                @endif

                                @if ($item->kategori === '2')
                                    <a href="#">Proses</a>
                                @endif

                                @if ($item->kategori === '3')
                                    <a href="#">Hasil</a>
                                @endif

                                @if ($item->kategori === '4')
                                    <a href="#">Pengembangan</a>
                                @endif

                                @if ($item->kategori === '5')
                                <a href="#">Kebijakan Pengembangan Komoditas</a>
                                @endif
                            </li>
                        </ul>
                        <ul class="blog__details__social">
                            <li class="title">Share :</li>
                            <li class="social-icons">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            @include('front.details.sidebar')
        </div>
    </div>
</section>

@endsection
