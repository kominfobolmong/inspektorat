@extends('front.app')

@section('title', 'Tupoksi')
@section('breadcrumb', 'Tupoksi')
@section('content')

<!-- breadcrumb-area -->
@include('front.details.breadcrumb')
<!-- breadcrumb-area-end -->

<section class="services__details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="services__details__content">
                    <h2 class="title">Tugas dan Fungsi</h2>
                    <p>{!! $item->tupoksi ?? null !!}</p>
                </div>
            </div>

            @include('front.details.sidebar')
        </div>
    </div>
</section>

@endsection
