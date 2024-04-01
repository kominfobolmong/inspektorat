@extends('front.app')

@section('title', 'Profil Inspektur')
@section('breadcrumb', 'Profil Inspektur')
@section('content')

<!-- breadcrumb-area -->
@include('front.details.breadcrumb')
<!-- breadcrumb-area-end -->

<section class="services__details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                {{-- <div style="text-align: center;margin-bottom: 30px;">
                    <img src="{{ Storage::url($item->foto_pimpinan ?? null) }}" alt="foto-inspektur" width="300">
                </div> --}}

                <div class="services__details__content">
                    <img src="{{ Storage::url($item->foto_pimpinan ?? null) }}" alt="foto-inspektur" width="300" style="float: left;margin-right: 20px;border: 2px solid #eee;border-radius: 5px;">
                    <p>{!! $item->kata_sambutan ?? null !!}</p>
                </div>
            </div>

            @include('front.details.sidebar')
        </div>
    </div>
</section>

@endsection
