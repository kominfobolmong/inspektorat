@extends('front.app')

@section('title', 'Detail Publikasi')
@section('breadcrumb', 'Detail Publikasi')
@section('content')

<!-- breadcrumb-area -->
@include('front.details.breadcrumb')
<!-- breadcrumb-area-end -->

<section class="standard__blog blog__details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="standard__blog__post">
                    {{-- <div class="standard__blog__thumb">
                        <img src="{{ $artikel->image ?? null }}" alt="artikel-image">
                    </div> --}}
                    <div class="blog__details__content services__details__content">
                        <ul class="blog__post__meta">
                            <li><i class="fal fa-calendar-alt"></i> {{ $publikasi->created_at->diffForHumans() }}</li>
                            <li><i class="fal fa-folder"></i> <a href="#">{{ $publikasi->type }}</a></li>
                            <li class="post-share"><a href="#"><i class="fal fa-eye"></i> {{ $publikasi->visit_count_total }}x dilihat</a></li>
                        </ul>
                        <h2 class="title">{{ Str::title($publikasi->title) ?? null }}</h2>
                        <p>{!! $publikasi->deskripsi ?? null !!}</p>


                        @if(Storage::disk('public')->exists($publikasi->lampiran ?? null))
                            <br><strong>LAMPIRAN</strong><br>
                            <br><object data="{{ Storage::url($publikasi->lampiran ?? null) }}" type="application/pdf" class="w-100" height="600">

                                <embed src="https://mozilla.github.io/pdf.js/web/viewer.html?file={{ Storage::url($publikasi->lampiran ?? null) }}" type="application/pdf">

                            </object>

                            {{-- <iframe
                                src="https://mozilla.github.io/pdf.js/web/viewer.html?file={{ Storage::url($publikasi->lampiran ?? null) }}"
                                width="100%"
                                height="700px"
                                style="border: none;">
                            </iframe> --}}

                        @endif
                    </div>
                    <div class="blog__details__bottom">
                        {{-- <ul class="blog__details__tag">
                            <li class="title">Tag:</li>
                            @foreach ($artikel->tags as $item)
                            <li class="tags-list">
                                <a href="#">{{ $item->name }}</a>
                            </li>
                            @endforeach
                        </ul> --}}
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
