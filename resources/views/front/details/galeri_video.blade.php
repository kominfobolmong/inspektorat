@extends('front.app')

@section('title', 'Galeri Video')
@section('breadcrumb', 'Galeri Video')
@section('content')

<!-- breadcrumb-area -->
@include('front.details.breadcrumb')
<!-- breadcrumb-area-end -->

<section class="portfolio__inner">
    <div class="container">
        <div class="portfolio__inner__active">
            @foreach ($items as $item)
            <div class="portfolio__inner__item grid-item">
                <div class="row mb-30 gx-0 align-items-center justify-content-center">
                    <div class="col mr-30">
                        {{-- <div class="portfolio__inner__thumb"> --}}
                            <iframe src="https://www.youtube.com/embed/{!! $item->embed !!}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="width: 100%;height: 400px;-o-object-fit: cover;object-position: center"></iframe>
                            <h5 class="mb-25">{{ $item->created_at->diffForHumans() }}</h5>
                            <h4 class="title">{{ $item->title }}</h4>
                        {{-- </div> --}}

                        {{-- <div class="portfolio__inner__content">
                        </div> --}}
                    </div>
                    {{-- <div class="col-lg-6 col-md-10">
                    </div> --}}
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
