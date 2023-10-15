@extends('frontend.detail.app', ['breadcrumb' => 'Detail limi'])

@section('content')

<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row g-5">

        <div class="col-lg-8">

          <article class="blog-details">

            <div class="post-img">
              <img src="{{ $news->image ?? null }}" alt="{{ $news->slug ?? null }}" class="img-fluid" style="object-fit: cover;object-position: center;width: 100%;height: 400px;">
            </div>

            <h2 class="title">{{ $news->title ?? null }}</h2>

            <div class="meta-top">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">{{ $news->user->name }}</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01">{{ $news->created_at->diffForHumans() }}</time></a></li>
                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#">{{ $news->category->name }}</a></li>
              </ul>
            </div><!-- End meta top -->

            <div class="content">
                {!! $news->body ?? null !!}
            </div><!-- End post content -->

            <div class="meta-bottom">
              <i class="bi bi-folder"></i>
              <ul class="cats">
                <li><a href="#">{{ $news->category->name }}</a></li>
              </ul>

              <i class="bi bi-tags"></i>
              <ul class="tags">
                @foreach ($news->tags as $item)
                <li><a href="#">{{ $item->name }}</a></li>
                @endforeach
              </ul>
            </div><!-- End meta bottom -->

          </article><!-- End blog post -->

        </div>

        @include('frontend.layouts.sidebar')
      </div>

    </div>
  </section>

@endsection
