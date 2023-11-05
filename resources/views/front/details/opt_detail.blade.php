@extends('front.app')

@section('title', 'Detail Opt/Hama')
@section('breadcrumb', 'Detail Opt/Hama')
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
                        <img src="{{ Storage::url($opt->image ?? null) }}" alt="opt-image">
                    </div>
                    <div class="blog__details__content services__details__content">
                        <ul class="blog__post__meta">
                            <li><i class="fal fa-calendar-alt"></i> {{ $opt->created_at->diffForHumans() }}</li>
                            <li><i class="fal fa-tags"></i> <a href="#">
                                @foreach ($opt->komoditas as $i)
                                {{ $i->nama }}
                                @endforeach
                            </a></li>
                            {{-- <li class="post-share"><a href="#"><i class="fal fa-eye"></i> ({{ \App\Models\News::withTotalVisitCount()->first()->visit_count_total }})</a></li> --}}
                        </ul>
                        <h2 class="title">{{ Str::title($opt->nama) ?? null }}</h2>
                        <p><strong>Nama Ilmiah: {{ $opt->nama_ilmiah ?? null }}</strong></p>
                        <p><strong>Pengenalan</strong><br> {!! $opt->deskripsi ?? null !!}</p>
                        <p><strong>Gejala Serangan</strong><br> {!! $opt->gejala ?? null !!}</p>
                        <p><strong>Pengendalian</strong><br> {!! $opt->pengendalian ?? null !!}</p>
                    </div>
                    <div class="blog__details__bottom">
                        <ul class="blog__details__tag">
                            <li class="title">Komoditas:</li>
                            @foreach ($opt->komoditas as $i)
                            <li class="tags-list">
                                <a href="#">{{ $i->nama }}</a>
                            </li>
                            @endforeach
                        </ul>
                        {{-- <ul class="blog__details__social">
                            <li class="title">Share :</li>
                            <li class="social-icons">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul> --}}
                    </div>
                    {{-- <div class="blog__next__prev">
                        <div class="row justify-content-between">
                            <div class="col-xl-5 col-md-6">
                                <div class="blog__next__prev__item">
                                    <h4 class="title">Previous Post</h4>
                                    <div class="blog__next__prev__post">
                                        <div class="blog__next__prev__thumb">
                                            <a href="blog-details.html"><img src="assets/img/blog/blog_prev.jpg" alt=""></a>
                                        </div>
                                        <div class="blog__next__prev__content">
                                            <h5 class="title"><a href="blog-details.html">Digital Marketing Agency Pricing Guide.</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="blog__next__prev__item next_post text-end">
                                    <h4 class="title">Next Post</h4>
                                    <div class="blog__next__prev__post">
                                        <div class="blog__next__prev__thumb">
                                            <a href="blog-details.html"><img src="assets/img/blog/blog_next.jpg" alt=""></a>
                                        </div>
                                        <div class="blog__next__prev__content">
                                            <h5 class="title"><a href="blog-details.html">App Prototyping
                                            Types, Example & Usages.</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

            @include('front.details.sidebar')
        </div>
    </div>
</section>

@endsection
