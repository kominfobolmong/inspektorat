<section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Informasi Terbaru</h2>
        <p>Informasi Perkebunan Terbaru</p>
      </div>

      <div class="row">

        @foreach ($news as $item)
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="post-box">
            <div class="post-img"><img src="{{ $item->image }}" alt="{{ $item->slug }}" class="img-fluid" style="object-fit: cover;object-position: center;width: 100%;height: 200px;"></div>
            <div class="meta">
              <span class="post-date">{{ $item->created_at->diffForHumans() }}</span>
              <span class="post-author"> / {{ $item->user->name }}</span>
            </div>
            <h3 class="post-title">{{ $item->title }}</h3>
            <p>{!! Str::limit($item->body, 50, '...') !!}</p>
            <a href="{{ route('berita-detail', $item->slug) }}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        @endforeach

      </div>

    </div>

  </section>
