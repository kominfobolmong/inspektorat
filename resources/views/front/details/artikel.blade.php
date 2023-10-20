@extends('front.app')

@section('title', 'Artikel Perkebunan')
@section('breadcrumb', 'Artikel Perkebunan')
@section('content')

<!-- breadcrumb-area -->
@include('front.details.breadcrumb')
<!-- breadcrumb-area-end -->

<section class="standard__blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                @foreach ($items as $item)
                <div class="standard__blog__post">
                    <div class="standard__blog__thumb">
                        <a href="{{ route('artikel-detail', $item->slug) }}"><img src="{{ $item->image }}" alt="{{ $item->slug }}"></a>
                    </div>
                    <div class="standard__blog__content">
                        <div class="blog__post__avatar">
                            <span class="post__by">By : <a href="#">{{ $item->user->name }}</a></span>
                        </div>
                        <h2 class="title"><a href="{{ route('artikel-detail', $item->slug) }}">{{ $item->title }}</a></h2>
                        <p>{!! Str::limit($item->body, 100, '...') !!}</p>
                        <ul class="blog__post__meta">
                            <li><i class="fal fa-calendar-alt"></i> {{ $item->created_at->diffForHumans() }}</li>
                            <li><i class="fal fa-folder"></i> <a href="#">{{ $item->category->name }}</a></li>
                            <li class="post-share"><a href="#"><i class="fal fa-eye"></i> (18)</a></li>
                        </ul>
                    </div>
                </div>
                @endforeach

                <div class="pagination-wrap">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#"><i class="far fa-long-arrow-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            @include('front.details.sidebar')
        </div>
    </div>
</section>

@endsection
