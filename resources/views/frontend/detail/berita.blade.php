@extends('frontend.detail.app', ['breadcrumb' => 'limi'])

@section('content')

  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row g-5">

          <div class="col-lg-8">

            <div class="row gy-4 posts-list">

            @foreach ($news as $item)
            <div class="col-lg-6">
              <article class="d-flex flex-column">

                <div class="post-img">
                    <img src="{{ $item->image }}" alt="{{ $item->slug }}" class="img-fluid" style="object-fit: cover;object-position: center;width: 100%;height: 200px;">
                </div>

                <h2 class="title">
                  <a href="{{ route('limi-detail', $item->slug) }}">{{ $item->title }}</a>
                </h2>

                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">{{ $item->user->name }}</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2022-01-01">{{ $item->created_at->diffForHumans() }}</time></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#">{{ $item->category->name }}</a></li>
                  </ul>
                </div>

                <div class="content">
                  <p>
                    {!! Str::limit($item->body, 50, '...') !!}
                  </p>
                </div>

                <div class="read-more mt-auto align-self-end">
                  <a href="{{ route('limi-detail', $item->slug) }}">Read More</a>
                </div>

              </article>
            </div><!-- End post list item -->
            @endforeach

          </div>
          <!-- End blog posts list -->

          {{-- <div class="blog-pagination">
            <ul class="justify-content-center">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
            </ul>
          </div> --}}
          <div class="blog-pagination">
            <ul class="justify-content-center">
              <li>{!! $news->links('layouts.pagination') !!}</li>
            </ul>
          </div>
          <!-- End blog pagination -->

        </div>

        @include('frontend.layouts.sidebar')

      </div>

    </div>
  </section><!-- End Blog Section -->

@endsection


