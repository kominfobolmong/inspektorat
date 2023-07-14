<section id="stats-counter" class="stats-counter">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4 align-items-center">

        <div class="col-lg-6">
          <img src="{{ asset('front/img/stats-img.svg') }}" alt="" class="img-fluid">
        </div>

        <div class="col-lg-6">

          <div class="stats-item d-flex align-items-center">
            <span data-purecounter-start="0" data-purecounter-end="{{ $layanans->count() }}" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Layanan</strong></p>
          </div><!-- End Stats Item -->

          <div class="stats-item d-flex align-items-center">
            <span data-purecounter-start="0" data-purecounter-end="{{ $photos->count() }}" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Kegiatan</strong></p>
          </div><!-- End Stats Item -->

          <div class="stats-item d-flex align-items-center">
            <span data-purecounter-start="0" data-purecounter-end="{{ $news->count() }}" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Berita</strong></p>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </div>
  </section>
