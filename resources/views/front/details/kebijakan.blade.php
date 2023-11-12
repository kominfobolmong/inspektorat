@extends('front.app')

@section('title', 'Kebijakan Pengembangan Komoditas')
@section('breadcrumb', 'Kebijakan Pengembangan Komoditas')
@section('content')

<!-- breadcrumb-area -->
@include('front.details.breadcrumb')
<!-- breadcrumb-area-end -->

<section class="blog">
    <div class="container">
        {{-- <h4 class="text-center mt-50 mb-50">Pengembangan Klinik</h4><br> --}}
        <div class="row gx-0 justify-content-center">
            @foreach ($items as $item)
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

        {!! $items->links() !!}
    </div>
</section>

@endsection

