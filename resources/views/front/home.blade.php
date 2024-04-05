<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inspektorat Daerah Kabupaten Bolaang Mongondow</title>
  <meta content="Website Resmi Inspektorat Daerah Kabupaten Bolaang Mongondow" name="description">
  <meta content="inspektorat, bolmong, bolaang mongondow" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('templates/home/logo.png') }}" rel="shortcut icon" type="image/x-icon">
  {{-- <link href="{{ asset('templates/home/logo.png') }}" rel="shortcut icon" type="image/x-icon"> --}}

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('templates/home/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/home/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/home/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/home/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/home/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/home/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('templates/home/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('templates/home/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <video autoplay muted loop id="videobackground">
      <source src="{{ asset('templates/home/videobg.mp4') }}" type="video/mp4">
    </video>

  <section id="hero" class="d-flex align-items-center justify-content-center">

    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
            <img src="{{ asset('templates/home/bolmongkab.png') }}" alt="logo" width="70" style="margin-right: 5px;">
            <img src="{{ asset('templates/home/logo.png') }}" alt="logo" width="70">
          <h1>Inspektorat Daerah</h1>
          <h2>Kabupaten Bolaang Mongondow</h2>
          <h2>
            MOKOKOT,
          <span
            class="typed"
            data-typed-items="MORALITAS, KOMPETENSI, KOMITMEN, INTEGRITAS"
          ></span>
          </h2>
        </div>
      </div>

      <div class="row gy-4 mt-5" data-aos="zoom-in" data-aos-delay="250">
        @foreach ($apps as $app)
        <div class="col-xl-3 col-md-4">
          <div class="icon-box">
            <img src="{{ Storage::url($app->image) }}" loading="lazy" alt="icon" style="width: 80px;">
            <h3><a href="{{ $app->url }}" target="_blank">{{ $app->name }}</a></h3>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section>
  <!-- End Hero -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container">
      <div class="copyright">
        &copy; {{ date('Y') }} Copyright <strong><span>Inspektorat Daerah Kabupaten Bolaang Mongondow</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://diskominfo.bolmongkab.go.id/">Egov Team</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  {{-- <div id="preloader"></div> --}}
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('templates/home/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('templates/home/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('templates/home/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('templates/home/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('templates/home/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('templates/home/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('templates/home/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('templates/home/vendor/typed.js/typed.umd.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('templates/home/js/main.js') }}"></script>

  <script>
    let vid = document.getElementById("videobackground");
    vid.playbackRate = 0.5;
  </script>

</body>

</html>
