@extends('front.app')

@section('title', 'Detail Komoditas')
@section('content')

<section class="breadcrumb__wrap">
    <div class="container custom-container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="breadcrumb__wrap__content">
                    <h2 class="title">{{ Str::title($item->nama) ?? null }}</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services__details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="services__details__thumb">
                    <img src="{{ Storage::url($item->image ?? null) }}" alt="{{ $item->slug ?? null }}">
                </div>
                <div class="services__details__content">
                    <h2 class="title">{{ Str::title($item->nama) ?? null }}</h2>
                    @if ($item->is_unggulan === 'Y')
                    <h6>{{ Str::title($item->nama) ?? null }} Termasuk Komoditas Unggulan</h6>
                    @endif
                    <p>{!! $item->deskripsi ?? null !!}</p>

                    {{-- <h2 class="title">Daftar Penyakit Pada Jenis Tanaman {{ Str::title($item->nama) ?? null }}</h2> --}}
                </div>
            </div>

            @include('front.details.sidebar')
        </div>
    </div>
</section>

@endsection
