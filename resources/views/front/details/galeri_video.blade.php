@extends('front.app')

@section('title', 'Galeri Video')
@section('breadcrumb', 'Galeri Video')
@section('content')

<!-- breadcrumb-area -->
@include('front.details.breadcrumb')
<!-- breadcrumb-area-end -->

<section class="blog">
    <div class="container">
        <div class="row gx-0 justify-content-center">
            @foreach ($items as $item)
            <div class="col-lg-4 col-md-6">
                <div class="blog__post__item">
                    <div class="blog__post__thumb">
                        <iframe src="https://www.youtube.com/embed/{!! $item->embed !!}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen loading="lazy" style="width: 100%;height: 300px;object-fit: cover;object-position: center"></iframe>
                    </div>
                    <div class="blog__post__content">
                        <span class="date">{{ $item->created_at->diffForHumans() }}</span>
                        <h3 class="title">{{ $item->title }}</h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-30">
            {!! $items->links() !!}
        </div>

    </div>
</section>

@endsection
