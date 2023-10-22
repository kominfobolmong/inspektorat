@extends('front.app')

@section('title', 'Detail Komoditas')
@section('breadcrumb', 'Detail Komoditas')
@section('content')

<!-- breadcrumb-area -->
@include('front.details.breadcrumb')
<!-- breadcrumb-area-end -->

<section class="services__details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="services__details__thumb">
                    <img src="{{ Storage::url($item->image ?? null) }}" alt="{{ $item->slug ?? null }}">
                </div>
                <div class="services__details__content">
                    <h2 class="title">{{ $item->nama ?? null }}</h2>
                    <p>{!! $item->deskripsi ?? null !!}</p>

                    <h2 class="small-title">Daftar penyakit pada tanaman {{ $item->nama ?? null }}</h2>

                    <ul class="services__details__list">
                        @foreach ($item->penyakits as $p)
                        <li>{{ $p->nama }}</li>
                        @endforeach
                    </ul>

                    <h2 class="small-title">Solusi Penyembuhan:</h2>

                    @foreach ($item->penyakits as $penyakit)
                    <p><strong>{{ $penyakit->nama }}</strong></p>
                    <p>{!! $penyakit->body !!}</p>
                    @endforeach
                </div>
            </div>

            @include('front.details.sidebar')
        </div>
    </div>
</section>

@endsection
