@extends('front.app')

@section('title', 'Galeri Foto')
@section('breadcrumb', 'Galeri Foto')
@section('content')

<!-- breadcrumb-area -->
@include('front.details.breadcrumb')
<!-- breadcrumb-area-end -->

<section class="portfolio__inner">
    <div class="container">
        {{-- <div class="row">
            <div class="col-12">
                <div class="portfolio__inner__nav">
                    <button class="active" data-filter="*">all</button>
                    <button data-filter=".cat-one">mobile apps</button>
                    <button data-filter=".cat-two">website Design</button>
                    <button data-filter=".cat-three">ui/kit</button>
                    <button data-filter=".cat-four">Landing page</button>
                </div>
            </div>
        </div> --}}
        <div class="portfolio__inner__active">
            @foreach ($items as $item)
            <div class="portfolio__inner__item grid-item cat-two cat-three">
                <div class="row gx-0 align-items-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="portfolio__inner__thumb">
                            <img src="{{ Storage::url($item->image) }}" alt="foto-kegiatan" class="img-fluid" style="object-fit: cover;object-position: center;width: 100%;height: 400px" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10">
                        <div class="portfolio__inner__content">
                            <h4 class="title">{{ $item->caption }}</h4>
                            <h5 class="mb-25">{{ $item->created_at->diffForHumans() }}</h5>
                            <p>{!! $item->deskripsi !!}</p>
                            {{-- <a href="#" class="link">View Case Study</a> --}}
                        </div>
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
