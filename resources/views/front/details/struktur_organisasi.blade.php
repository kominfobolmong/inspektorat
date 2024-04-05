@extends('front.app')

@section('title', 'Struktur Organisasi')
@section('breadcrumb', 'Struktur Organisasi')
@section('content')

<!-- breadcrumb-area -->
@include('front.details.breadcrumb')
<!-- breadcrumb-area-end -->

<section class="services__details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <figure>
                    <img src="{{ Storage::url($item->struktur_organisasi ?? null) }}" alt="struktur-organisasi" loading="lazy" class="w-100" loading="lazy">
                    <figcaption>Struktur Organisasi Inspektorat Daerah Kab. Bolaang Mongondow</figcaption>
                </figure>
            </div>

            @include('front.details.sidebar')
        </div>
    </div>
</section>

@endsection
