@extends('front.app')

@section('title', 'Regulasi')
@section('breadcrumb', 'Publikasi - Regulasi')
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
                    {{-- <div class="standard__blog__thumb">
                        <a href="{{ route('news-detail', $item->slug) }}"><img src="{{ $item->image }}" loading="lazy" alt="artikel-image"></a>
                    </div> --}}
                    <div class="standard__blog__content">
                        {{-- <div class="blog__post__avatar">
                            <span class="post__by">By : <a href="#">{{ $item->user->name }}</a></span>
                        </div> --}}
                        <h2 class="title"><a href="{{ route('publikasi-detail', $item->slug) }}">{{ Str::title($item->title) }}</a></h2>
                        <p>{!! Str::limit($item->deskripsi, 300, '...') !!}</p>
                        <ul class="blog__post__meta">
                            <li><i class="fal fa-calendar-alt"></i> {{ $item->created_at->diffForHumans() }}</li>
                            <li><i class="fal fa-folder"></i> <a href="#">{{ $item->type }}</a></li>
                            <li class="post-share"><a href="#"><i class="fal fa-eye"></i> {{ $item->visit_count_total }}x dilihat</a></li>
                        </ul>
                    </div>
                </div>
                @endforeach

                {!! $items->links() !!}
            </div>

            @include('front.details.sidebar')
        </div>
    </div>
</section>

@endsection
