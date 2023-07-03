<section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Kegiatan Terbaru</h2>
      </div>

      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 portfolio-container">
            @foreach ($photos as $item)
                <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                    <a href="{{ Storage::url($item->image) }}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ Storage::url($item->image) }}" class="img-fluid" alt=""></a>
                    <div class="portfolio-info">
                        <p>{{ $item->created_at->diffForHumans() }}</p>
                        <h5>{{ $item->caption }}</h5>
                    </div>
                    </div>
                </div>
            @endforeach
          <!-- End Portfolio Item -->

        </div><!-- End Portfolio Container -->

      </div>

    </div>
  </section>
