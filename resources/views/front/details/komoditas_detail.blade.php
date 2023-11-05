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
                    <h2 class="title">{{ Str::title($item->nama) ?? null }}</h2>
                    @if ($item->is_unggulan === 'Y')
                    <p><strong>{{ Str::title($item->nama) ?? null }} Termasuk Komoditas Unggulan</strong></p>
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
