@extends('front.app')

@section('title', 'Profil Dinas')
@section('breadcrumb', 'Profil Dinas')
@section('content')

<!-- breadcrumb-area -->
@include('front.details.breadcrumb')
<!-- breadcrumb-area-end -->

<!-- about-area -->
<section class="about about__style__two">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about__image">
                    <img
                        src="{{ Storage::url($item->foto_pimpinan ?? null) }}"
                        alt="foto-pimpinan"
                        class="img-fluid img-thumbnail"
                    />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__content">
                    <div class="section__title">
                        <span class="sub-title">Profil Pimpinan</span>
                        <h2 class="title">
                            Kepala Dinas Perkebunan
                        </h2>
                    </div>
                    <div class="about__exp">
                        {{-- <div class="about__exp__icon">
                            <img
                                src="{{ asset('templates/frontend/img/icons/about_icon.png') }}"
                                alt=""
                            />
                        </div> --}}
                        <div class="about__exp__content">
                            <p>
                                TONNY SUSANTO TOLIGAGA, S.Pt, MP <br />
                                NIP: *********
                            </p>
                        </div>
                    </div>
                    <p class="desc">
                        {!! $item->kata_sambutan ?? null !!}
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="about__info__wrap">
                    <ul
                        class="nav nav-tabs"
                        id="myTab"
                        role="tablist"
                    >
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link active"
                                id="visimisi-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#visimisi"
                                type="button"
                                role="tab"
                                aria-controls="visimisi"
                                aria-selected="true"
                            >
                                Visi Misi
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link"
                                id="tupoksi-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#tupoksi"
                                type="button"
                                role="tab"
                                aria-controls="tupoksi"
                                aria-selected="true"
                            >
                                Tugas Pokok & Fungsi
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link"
                                id="strukturorganisasi-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#strukturorganisasi"
                                type="button"
                                role="tab"
                                aria-controls="strukturorganisasi"
                                aria-selected="false"
                            >
                                Struktur Organisasi
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link"
                                id="maklumat-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#maklumat"
                                type="button"
                                role="tab"
                                aria-controls="maklumat"
                                aria-selected="false"
                            >
                                Maklumat Pelayanan
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link"
                                id="sdm-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#sdm"
                                type="button"
                                role="tab"
                                aria-controls="sdm"
                                aria-selected="false"
                            >
                                SDM
                            </button>
                        </li>

                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div
                            class="tab-pane fade show active"
                            id="visimisi"
                            role="tabpanel"
                            aria-labelledby="visimisi-tab"
                        >
                            <ul class="about__exp__list">
                                <li>
                                    <h5 class="title">
                                        Visi
                                    </h5>
                                    <p>
                                        {!! $item->visi ?? null !!}
                                    </p>
                                </li>
                                <li>
                                    <h5 class="title">
                                        Misi
                                    </h5>
                                    <p>
                                        {!! $item->misi ?? null !!}
                                    </p>
                                </li>
                            </ul>
                        </div>

                        <div
                            class="tab-pane fade"
                            id="tupoksi"
                            role="tabpanel"
                            aria-labelledby="tupoksi-tab"
                        >
                            <ul class="about__exp__list">
                                <li>
                                    {{-- <h5 class="title">
                                        Tupoksi
                                    </h5> --}}
                                    <p>
                                        {!! $item->tupoksi ?? null !!}
                                    </p>
                                </li>
                            </ul>
                        </div>

                        <div
                            class="tab-pane fade"
                            id="strukturorganisasi"
                            role="tabpanel"
                            aria-labelledby="strukturorganisasi-tab"
                        >
                            <div class="about__skill__wrap">
                                <div class="row">
                                    <div class="col">
                                        <div
                                            class="about__skill__item"
                                        >
                                           <img src="{{ Storage::url($item->struktur_organisasi ?? null) }}" alt="image-struktur-organisasi" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="tab-pane fade"
                            id="maklumat"
                            role="tabpanel"
                            aria-labelledby="maklumat-tab"
                        >
                            <div class="about__skill__wrap">
                                <div class="row">
                                    <div class="col">
                                        <div
                                            class="about__skill__item"
                                        >
                                        <img src="{{ Storage::url($item->maklumat ?? null) }}" alt="image-maklumat-pelayanan" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="tab-pane fade"
                            id="sdm"
                            role="tabpanel"
                            aria-labelledby="sdm-tab"
                        >
                            <div class="about__award__wrap">
                                <div
                                    class="row justify-content-center"
                                >
                                    <div class="col-md-6 col-sm-9">
                                        <div
                                            class="about__award__item"
                                        >
                                            <div
                                                class="award__logo"
                                            >
                                                <img
                                                    src="assets/img/images/awards_01.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="award__content"
                                            >
                                                <h5 class="title">
                                                    Best ux designer
                                                    award in 2002
                                                </h5>
                                                <p>
                                                    There are many
                                                    variations of
                                                    passages of
                                                    Lorem Ipsum
                                                    available, but
                                                    the majority
                                                    have suffered
                                                    alteration in
                                                    some form, by
                                                    injected humour,
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-9">
                                        <div
                                            class="about__award__item"
                                        >
                                            <div
                                                class="award__logo"
                                            >
                                                <img
                                                    src="assets/img/images/awards_02.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="award__content"
                                            >
                                                <h5 class="title">
                                                    BBA final
                                                    examination 2001
                                                </h5>
                                                <p>
                                                    There are many
                                                    variations of
                                                    passages of
                                                    Lorem Ipsum
                                                    available, but
                                                    the majority
                                                    have suffered
                                                    alteration in
                                                    some form, by
                                                    injected humour,
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-9">
                                        <div
                                            class="about__award__item"
                                        >
                                            <div
                                                class="award__logo"
                                            >
                                                <img
                                                    src="assets/img/images/awards_03.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="award__content"
                                            >
                                                <h5 class="title">
                                                    User research
                                                    award 2020
                                                </h5>
                                                <p>
                                                    There are many
                                                    variations of
                                                    passages of
                                                    Lorem Ipsum
                                                    available, but
                                                    the majority
                                                    have suffered
                                                    alteration in
                                                    some form, by
                                                    injected humour,
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-9">
                                        <div
                                            class="about__award__item"
                                        >
                                            <div
                                                class="award__logo"
                                            >
                                                <img
                                                    src="assets/img/images/awards_04.png"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="award__content"
                                            >
                                                <h5 class="title">
                                                    Dsigning award
                                                    2021
                                                </h5>
                                                <p>
                                                    There are many
                                                    variations of
                                                    passages of
                                                    Lorem Ipsum
                                                    available, but
                                                    the majority
                                                    have suffered
                                                    alteration in
                                                    some form, by
                                                    injected humour,
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-area-end -->

@endsection
