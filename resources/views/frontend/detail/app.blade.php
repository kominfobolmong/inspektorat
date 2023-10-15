<!DOCTYPE html>
<html lang="en">

<head>
  @include('frontend.layouts.head')
</head>

<body>

  <!-- ======= Header ======= -->
  @include('frontend.layouts.header')
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>{{ $breadcrumb }}</h2>
          <ol>
            <li><a href="#">Home</a></li>
            <li>{{ $breadcrumb }}</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    {{-- <section class="inner-page">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>Inner Page</h2>
            <p>Example inner page template</p>
          </div>

          <p>
            You can duplicate this page and create any number of pages you like!
          </p>

        </div>
    </section> --}}
    <!-- End Inner Page -->

    @yield('content')

  </main><!-- End #main -->

  @include('frontend.layouts.footer')
  @include('frontend.layouts.foot')

</body>

</html>
