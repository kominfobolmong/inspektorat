<!DOCTYPE html>

<html lang="en">
<head>

  @include('frontend.layouts.head')

</head>

<body id="top">

<header>
	@include('frontend.layouts.header')
</header>


<!-- Slider Start -->

<section id="hero" style="background-color: rgba(255, 255, 255, 0.8);">
    @include('frontend.layouts.banner')
</section>
{{-- <section class="section about">
	@include('frontend.layouts.about')
</section> --}}
<section class="features mt-5">
    @include('frontend.layouts.waktu_pelayanan')
</section>
<section class="section service gray-bg">
	@include('frontend.layouts.service')
</section>
<section class="section appoinment">
	@include('frontend.layouts.berita')
</section>
<section class="cta-section ">
	@include('frontend.layouts.data')
</section>
<section class="section service gray-bg mt-5">
	@include('frontend.layouts.faq')
</section>
<section class="section clients">
	@include('frontend.layouts.link')
</section>

<!-- footer Start -->
<footer class="footer section gray-bg">
	@include('frontend.layouts.footer')
</footer>



    @include('frontend.layouts.foot')

  </body>
  </html>
