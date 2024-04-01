@extends('front.app')

@section('title', 'Arti Logo/lambang')
@section('breadcrumb', 'Arti Logo/lambang')
@section('content')

<!-- breadcrumb-area -->
@include('front.details.breadcrumb')
<!-- breadcrumb-area-end -->

<section class="services__details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <div style="text-align: center;margin-bottom: 30px;">
                    <img src="{{ asset('templates/home/logo.png') }}" alt="logo-inspektorat" width="300">
                </div>

                <div class="services__details__content">
                    {{-- <h2 class="title">Arti Logo/lambang</h2> --}}
                    <p>{!! $item->dasar_hukum ?? null !!}</p>
                </div>
            </div>

            @include('front.details.sidebar')
        </div>
    </div>
</section>

@endsection
