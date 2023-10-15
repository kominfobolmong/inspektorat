<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layouts.head')
</head>

<body>

  <!-- ======= Header ======= -->
  @include('frontend.layouts.header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  @foreach ($sliders as $item)
  <section id="hero" class="hero carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    <div class="carousel-inner">

      <div class="carousel-item @if ($loop->first)
        active
    @endif">
        <img src="{{ $item->image }}" alt="{{ $item->caption }}" class="img-fluid img">

      </div><!-- End Carousel Item -->

    </div>

    <a class="carousel-control-prev" href="#hero" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#hero" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

    <ol class="carousel-indicators"></ol>

</section>
@endforeach

  <!-- ======= Call To Action Section ======= -->
  <section id="cta" class="cta">
    <div class="container" data-aos="zoom-out">

      <div class="row g-2">

        <div class="content d-flex flex-column justify-content-center order-last order-md-first">
          <h3><em>L</em>ayanan <em>I</em>nformasi dan <em>M</em>anfaat <em>I</em>nterkoneksi</h3>
          <p> LIMI adalah singkatan dari Layanan Informasi dan Manfaat Interkoneksi (LIMI) Agribisnis Perkebunan yaitu layanan yang terdiri dari KLINIK AGRIBISNIS PERKEBUNAN, BUDIDAYA dan SARANA PRASARANA</p>
          <div class="d-flex">
              <a class="cta-btn align-self-start" href="{{ route('limi') }}">Selengkapnya</a>
              <a href="https://youtu.be/WUwHlDW00KE?si=gnc14Pr2m56lYjeL" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Tonton Video</span></a>
          </div>
        </div>
    </div>

    </div>
  </section>
  <!-- End Call To Action Section -->

  {{-- <section id="featured-services" class="featured-services">
    <div class="container">

      <div class="row gy-2">

        <div class="col-xl-4 col-md-4 d-flex justify-content-center" data-aos="zoom-out">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-1-square icon"></i></div>
            <h4><a href="{{ route('klinik_ap') }}" class="stretched-link">Klinik AP</a></h4>
            <p>deskripsi klinik AP</p>
          </div>
        </div>
        <!-- End Service Item -->

        <div class="col-xl-4 col-md-4 d-flex" data-aos="zoom-out" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-2-square icon"></i></div>
            <h4><a href="{{ route('budidaya') }}" class="stretched-link">Budidaya</a></h4>
            <p>deskripsi budidaya</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-4 col-md-4 d-flex" data-aos="zoom-out" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-3-square icon"></i></div>
            <h4><a href="{{ route('sarana_prasarana') }}" class="stretched-link">Sarana Prasarana</a></h4>
            <p>deskripsi sarana prasarana</p>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>
  </section> --}}

  <main id="main">

    <!-- ======= Recent Blog Posts Section ======= -->
    @include('frontend.layouts.berita')
    <!-- End Recent Blog Posts Section -->

        <!-- ======= On Focus Section ======= -->
        <section id="onfocus" class="onfocus">
            <div class="container-fluid p-0" data-aos="fade-up">

              <div class="row g-0">
                <div class="col-lg-6 video-play position-relative">
                  <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                </div>
                <div class="col-lg-6">
                  <div class="content d-flex flex-column justify-content-center h-100">
                    <h3>Voluptatem dignissimos provident quasi corporis</h3>
                    <p class="fst-italic">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                      magna aliqua.
                    </p>
                    <ul>
                      <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                      <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                      <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                    </ul>
                    <a href="#" class="read-more align-self-start"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>

            </div>
          </section>
          <!-- End On Focus Section -->

    <!-- ======= Contact Section ======= -->
    @include('frontend.layouts.kontak')
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('frontend.layouts.footer')
  <!-- End Footer -->

  <div id="preloader"></div>

  @include('frontend.layouts.foot')

</body>

</html>
