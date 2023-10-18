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

                    {{-- <ul class="services__details__list">
                        <li>Achieving effectiveness,</li>
                        <li>Perceiving and utilizing opportunities,</li>
                        <li>Mobilising resources,</li>
                        <li>Securing an advantageous position,</li>
                        <li>Meeting challenges and threats,</li>
                        <li>Directing efforts and behaviour and</li>
                        <li>Gaining command over the situation.</li>
                    </ul> --}}
                    {{-- <p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete
                    successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried
                    out to reach the desired ends</p> --}}
                    {{-- <div class="services__details__img">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="assets/img/images/services_details02.jpg" alt="">
                            </div>
                            <div class="col-sm-6">
                                <img src="assets/img/images/services_details03.jpg" alt="">
                            </div>
                        </div>
                    </div> --}}

                    @foreach ($item->penyakits as $penyakit)
                    <h2 class="small-title">{{ $penyakit->nama }}</h2>
                    <p>{!! $penyakit->body !!}</p>
                    @endforeach
                    {{-- <p>The maximum part of the company’s present strategy is a result of formerly initiated actions and business approaches, but when market conditions take an unanticipated turn, the company requires a strategic reaction to cope with contingencies. Hence, for unforeseen development, a part of the business strategy is formulated as a reasoned response nature of business strategy.</p> --}}
                </div>
            </div>

            @include('front.details.sidebar')
        </div>
    </div>
</section>

@endsection
