<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title') - Dinas Perkebunan Kabupaten Bolaang Mongondow</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('templates/frontend/img/logo/logo-bolmong.png') }}">
        <!-- Place favicon.ico in the root directory -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

        <!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('templates/frontend/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('templates/frontend/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('templates/frontend/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('templates/frontend/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('templates/frontend/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('templates/frontend/css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('templates/frontend/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('templates/frontend/css/responsive.css') }}">
    </head>

    <body>

        <!-- preloader-start -->
        {{-- <div id="preloader">
            <div class="rasalina-spin-box"></div>
        </div> --}}
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        @include('front.section.header')
        <!-- header-area-end -->

        <!-- main-area -->
        <main>
            @yield('content')
        </main>
        <!-- main-area-end -->

        <!-- Footer-area -->
        <footer class="footer">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4">
                        <div class="footer__widget">
                            <div class="fw-title">
                                <h5 class="sub-title">Alamat</h5>
                                <h4 class="title">Dinas Perkebunan</h4>
                            </div>
                            <div class="footer__widget__text">
                                <p>{{ $contact->alamat ?? null }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="footer__widget">
                            <div class="fw-title">
                                <h5 class="sub-title">Link Terkait</h5>
                            </div>
                            <div class="footer__widget__address">
                                @foreach ($links as $item)
                                    <a href="{{ $item->url }}" class="mail">{{ $item->name }}</a><br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="footer__widget">
                            <div class="fw-title">
                                <h5 class="sub-title">Kontak</h5>
                            </div>
                            <div class="footer__widget__social">
                                <p>{{ 'Telepon: '. $contact->no_telp ?? null }}</p>
                                <p>{{ 'Email: '. $contact->email ?? null }}</p>
                                <ul class="footer__social__list">
                                    <li><a href="https://web.facebook.com/profile.php?id=61552159365094"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright__wrap">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright__text text-center">
                                <p>Copyright @ {{ date('Y') }} Dinas Perkebunan Kab. Bolaang Mongondow</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer-area-end -->

        <!-- JS here -->
        <script src="{{ asset('templates/frontend/js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('templates/frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('templates/frontend/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('templates/frontend/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('templates/frontend/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('templates/frontend/js/element-in-view.js') }}"></script>
        <script src="{{ asset('templates/frontend/js/slick.min.js') }}"></script>
        <script src="{{ asset('templates/frontend/js/ajax-form.js') }}"></script>
        <script src="{{ asset('templates/frontend/js/wow.min.js') }}"></script>
        <script src="{{ asset('templates/frontend/js/plugins.js') }}"></script>
        <script src="{{ asset('templates/frontend/js/main.js') }}"></script>

    </body>
</html>
