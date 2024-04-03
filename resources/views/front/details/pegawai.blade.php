@extends('front.app')

@section('title', 'Pegawai')
@section('breadcrumb', 'Pegawai')
@section('content')

<!-- breadcrumb-area -->
@include('front.details.breadcrumb')
<!-- breadcrumb-area-end -->

<section id="team" class="team">
    <div class="container" >

      <div class="row d-flex justify-content-center mb-5">
        @foreach ($pegawai as $item)
            @if ($item->kode === '1' || $item->kode === '2')
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ Storage::disk('public')->exists($item->image ?? null)? Storage::url($item->image) : asset('templates/home/no_photo.png') }}" class="img-fluid" alt="foto-pegawai">
                            <div class="social">
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>{{ $item->nama }}</h4>
                            <span>{{ Str::upper($item->jabatan) }}</span>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
      </div>

      <div class="row">
        @foreach ($pegawai as $item)
            @if ($item->kode !== '1' && $item->kode !== '2')
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ Storage::disk('public')->exists($item->image ?? null)? Storage::url($item->image) : asset('templates/home/no_photo.png') }}" class="img-fluid" alt="foto-pegawai">
                            <div class="social">
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>{{ $item->nama }}</h4>
                            <span>{{ Str::upper($item->jabatan) }}</span>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
      </div>

    </div>
  </section>

@endsection
