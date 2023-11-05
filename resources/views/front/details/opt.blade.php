@extends('front.app')

@section('title', 'Daftar Opt/Hama')
@section('breadcrumb', 'Daftar Opt/Hama')
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
                        <a href="{{ route('opt-detail', $item->slug) }}"><img src="{{ Storage::url($item->image) }}" alt="opt-image"></a>
                    </div>
                    <div class="standard__blog__content">
                        {{-- <div class="blog__post__avatar">
                            <span class="post__by">By : <a href="#">{{ $item->user->name }}</a></span>
                        </div> --}}
                        <h2 class="title"><a href="{{ route('opt-detail', $item->slug) }}">{{ Str::title($item->nama) }}</a></h2>
                        {{-- <p>{!! Str::limit($item->body, 100, '...') !!}</p> --}}
                        <ul class="blog__post__meta">
                            <li><i class="fal fa-calendar-alt"></i> {{ $item->created_at->diffForHumans() }}</li>
                            <li><i class="fal fa-tags"></i> <a href="#">
                                @foreach ($item->komoditas as $i)
                                {{ $i->nama }}
                                @endforeach
                            </a></li>
                            {{-- <li class="post-share"><a href="#"><i class="fal fa-eye"></i> ({{ \App\Models\Penyakit::withTotalVisitCount()->first()->visit_count_total }})</a></li> --}}
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
