@extends('front.app')

@section('title', 'Artikel Perkebunan')
@section('breadcrumb', 'Artikel Perkebunan')
@section('content')

<!-- breadcrumb-area -->
@include('front.details.breadcrumb')
<!-- breadcrumb-area-end -->

<section class="standard__blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="standard__blog__post">
                    <div class="standard__blog__thumb">
                        <a href="blog-details.html"><img src="assets/img/blog/blog_thumb01.jpg" alt=""></a>
                        <a href="blog-details.html" class="blog__link"><i class="far fa-long-arrow-right"></i></a>
                    </div>
                    <div class="standard__blog__content">
                        <div class="blog__post__avatar">
                            <div class="thumb"><img src="assets/img/blog/blog_avatar.png" alt=""></div>
                            <span class="post__by">By : <a href="#">Halina Spond</a></span>
                        </div>
                        <h2 class="title"><a href="blog-details.html">Best website traffice Booster with great tools.</a></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                        <ul class="blog__post__meta">
                            <li><i class="fal fa-calendar-alt"></i> 25 january 2021</li>
                            <li><i class="fal fa-comments-alt"></i> <a href="#">Comment (08)</a></li>
                            <li class="post-share"><a href="#"><i class="fal fa-share-all"></i> (18)</a></li>
                        </ul>
                    </div>
                </div>
                <div class="standard__blog__post">
                    <div class="standard__blog__thumb">
                        <a href="blog-details.html"><img src="assets/img/blog/blog_thumb02.jpg" alt=""></a>
                        <a href="blog-details.html" class="blog__link"><i class="far fa-long-arrow-right"></i></a>
                    </div>
                    <div class="standard__blog__content">
                        <div class="blog__post__avatar">
                            <div class="thumb"><img src="assets/img/blog/blog_avatar.png" alt=""></div>
                            <span class="post__by">By : <a href="#">Rasalina D.</a></span>
                        </div>
                        <h2 class="title"><a href="blog-details.html">How you should start product design</a></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                        <ul class="blog__post__meta">
                            <li><i class="fal fa-calendar-alt"></i> 28 january 2021</li>
                            <li><i class="fal fa-comments-alt"></i> <a href="#">Comment (12)</a></li>
                            <li class="post-share"><a href="#"><i class="fal fa-share-all"></i> (18)</a></li>
                        </ul>
                    </div>
                </div>
                <div class="standard__blog__post">
                    <div class="standard__blog__thumb">
                        <a href="blog-details.html"><img src="assets/img/blog/blog_thumb03.jpg" alt=""></a>
                        <a href="blog-details.html" class="blog__link"><i class="far fa-long-arrow-right"></i></a>
                    </div>
                    <div class="standard__blog__content">
                        <div class="blog__post__avatar">
                            <div class="thumb"><img src="assets/img/blog/blog_avatar.png" alt=""></div>
                            <span class="post__by">By : <a href="#">Halina Spond</a></span>
                        </div>
                        <h2 class="title"><a href="blog-details.html">How to start sketch after build a website</a></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                        <ul class="blog__post__meta">
                            <li><i class="fal fa-calendar-alt"></i> 28 january 2021</li>
                            <li><i class="fal fa-comments-alt"></i> <a href="#">Comment (12)</a></li>
                            <li class="post-share"><a href="#"><i class="fal fa-share-all"></i> (18)</a></li>
                        </ul>
                    </div>
                </div>
                <div class="standard__blog__post">
                    <div class="standard__blog__thumb">
                        <a href="blog-details.html"><img src="assets/img/blog/blog_thumb04.jpg" alt=""></a>
                        <a href="blog-details.html" class="blog__link"><i class="far fa-long-arrow-right"></i></a>
                    </div>
                    <div class="standard__blog__content">
                        <div class="blog__post__avatar">
                            <div class="thumb"><img src="assets/img/blog/blog_avatar.png" alt=""></div>
                            <span class="post__by">By : <a href="#">Halina Spond</a></span>
                        </div>
                        <h2 class="title"><a href="blog-details.html">Best website traffics Booster with great tools.</a></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                        <ul class="blog__post__meta">
                            <li><i class="fal fa-calendar-alt"></i> 28 january 2021</li>
                            <li><i class="fal fa-comments-alt"></i> <a href="#">Comment (12)</a></li>
                            <li class="post-share"><a href="#"><i class="fal fa-share-all"></i> (18)</a></li>
                        </ul>
                    </div>
                </div>
                <div class="pagination-wrap">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#"><i class="far fa-long-arrow-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            @include('front.details.sidebar')
        </div>
    </div>
</section>

@endsection
