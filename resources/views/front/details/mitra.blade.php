@extends('front.app')

@section('title', 'Mitra')
@section('breadcrumb', 'Mitra')
@section('content')

<!-- breadcrumb-area -->
@include('front.details.breadcrumb')
<!-- breadcrumb-area-end -->

<section class="about about__style__two">
    <div class="container">
        {{-- <div class="row"> --}}
            {{-- <div class="col-12"> --}}
                {{-- <div class="about__info__wrap"> --}}
                    <div class="about__education__wrap">
                        <div class="row">
                            @foreach ($items as $item)
                            <div class="col-md-4 col-sm-6">
                                <div
                                    class="about__education__item"
                                >
                                    <h3 class="title">
                                        {{ $item->nama_perusahaan }}
                                    </h3>
                                    {{-- <span class="date"
                                        >2004 – 2016</span
                                    > --}}
                                    <ul>
                                        <li><strong>Nama Direktur:</strong> {{ $item->nama_direktur }}</li>
                                        <li><strong>Bidang Usaha:</strong> {{ $item->bidang_usaha }}</li>
                                        <li><strong>Alamat:</strong> {{ $item->alamat }}</li>
                                        <li><strong>Email:</strong> {{ $item->email }}</li>
                                        <li><strong>Telepon:</strong> {{ $item->telepon }}</li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                {{-- </div> --}}
            {{-- </div> --}}
        {{-- </div> --}}
    </div>
</section>

@endsection
