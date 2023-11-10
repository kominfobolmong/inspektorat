@extends('front.app')

@section('title', 'Komoditas Unggulan Daerah')
@section('breadcrumb', 'Komoditas Unggulan Daerah')
@section('content')

<!-- breadcrumb-area -->
@include('front.details.breadcrumb')
<!-- breadcrumb-area-end -->

<section class="services__style__two">
    <div class="container">
        <div class="services__style__two__wrap">
            <div class="row gx-0">
                @foreach ($items as $item)
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="services__style__two__item">
                        <div class="services__style__two__icon">
                            <img
                                src="{{ Storage::url($item->image) }}"
                                class="img-fluid rounded"
                                alt="{{ $item->slug }}"
                            />
                        </div>
                        <div class="services__style__two__content">
                            <h3 class="title">
                                <a href="{{ route('komoditas-detail', $item->slug) }}"
                                    >{{ Str::title($item->nama) }}</a
                                >
                            </h3>
                            {{-- <p>
                                {!! Str::limit($item->deskripsi, 400, '...') !!}
                            </p> --}}
                            <a
                                href="{{ route('komoditas-detail', $item->slug) }}"
                                class="services__btn"
                                ><i
                                    class="far fa-long-arrow-right"
                                ></i
                            ></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
