@extends('front.app')

@section('title', 'Visi Misi')
@section('breadcrumb', 'Visi Misi')
@section('content')

<!-- breadcrumb-area -->
@include('front.details.breadcrumb')
<!-- breadcrumb-area-end -->

<section class="services__details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="services__details__content">
                    <h2 class="title">Visi</h2>
                    <p>{!! $item->visi ?? null !!}</p>

                    <h2 class="title">Misi</h2>
                    <p>{!! $item->misi ?? null !!}</p>
                </div>
            </div>

            @include('front.details.sidebar')
        </div>
    </div>
</section>

@endsection
