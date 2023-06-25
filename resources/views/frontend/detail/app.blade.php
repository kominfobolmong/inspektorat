<!DOCTYPE html>

<html lang="en">
<head>
    @include('frontend.layouts.head')
</head>

<body id="top">

<header>
	@include('frontend.layouts.header')
</header>

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          {{-- <span class="text-white">Department Details</span> --}}
          <h1 class="text-capitalize mb-5 text-lg">{{ $breadcrumb }}</h1>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section department-single">
	<div class="container">
		@yield('content')
	</div>
</section>

<!-- footer Start -->
<footer class="footer section gray-bg">
	@include('frontend.layouts.footer')
</footer>

    @include('frontend.layouts.foot')

  </body>
  </html>
