@extends('front.app')

@section('title', 'Kontak')
@section('breadcrumb', 'Kontak')
@section('content')

<!-- breadcrumb-area -->
@include('front.details.breadcrumb')
<!-- breadcrumb-area-end -->

<!-- contact-info-area -->
<section class="contact-info-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="contact__info">
                    <div class="contact__info__icon">
                        <img
                            src="{{ asset('templates/frontend/img/icons/contact_icon01.png') }}"
                            alt=""
                        />
                    </div>
                    <div class="contact__info__content">
                        <h4 class="title">Alamat</h4>
                        <span>{{ $contact->alamat ?? null }}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact__info">
                    <div class="contact__info__icon">
                        <img
                            src="{{ asset('templates/frontend/img/icons/contact_icon02.png') }}"
                            alt=""
                        />
                    </div>
                    <div class="contact__info__content">
                        <h4 class="title">Telepon</h4>
                        <span>{{ $contact->no_telp ?? null }}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact__info">
                    <div class="contact__info__icon">
                        <img
                            src="{{ asset('templates/frontend/img/icons/contact_icon03.png') }}"
                            alt=""
                        />
                    </div>
                    <div class="contact__info__content">
                        <h4 class="title">Email</h4>
                        <span>{{ $contact->email ?? null }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-info-area-end -->

<!-- contact-map -->
<div id="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3578716839493!2d124.02026877486664!3d0.8704740991210987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x327e6fc4478e7459%3A0xb35668331a552081!2sINSPEKTORAT%20DAERAH%20KAB.BOLAANG%20MONGONDOW!5e0!3m2!1sid!2sid!4v1706524682304!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- contact-map-end -->

@endsection
