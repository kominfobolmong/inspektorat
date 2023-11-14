@extends('front.app')

@section('title', 'Galeri Foto')
@section('breadcrumb', 'Galeri Foto')
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
                        <img src="{{ Storage::url($item->image) }}" alt="foto-kegiatan" class="img-fluid" style="object-fit: cover;object-position: center;width: 100%;height: 300px" />
                    </div>
                    <div class="blog__post__content">
                        <span class="date">{{ $item->created_at->diffForHumans() }}</span>
                        <h3 class="title">{{ $item->caption }}</h3>
                        {{-- <p>{!! $item->deskripsi !!}</p> --}}
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
