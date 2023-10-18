@extends('front.app')

@section('title', 'Beranda')

@section('content')

 <!-- banner-area -->
 @include('front.section.banner')
 <!-- banner-area-end -->

 <!-- about-area -->
 {{-- <section id="aboutSection" class="about">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-lg-6">
                 <ul class="about__icons__wrap">
                     <li>
                         <img class="light" src="assets/img/icons/xd_light.png" alt="XD">
                         <img class="dark" src="assets/img/icons/xd.png" alt="XD">
                     </li>
                     <li>
                         <img class="light" src="assets/img/icons/skeatch_light.png" alt="Skeatch">
                         <img class="dark" src="assets/img/icons/skeatch.png" alt="Skeatch">
                     </li>
                     <li>
                         <img class="light" src="assets/img/icons/illustrator_light.png" alt="Illustrator">
                         <img class="dark" src="assets/img/icons/illustrator.png" alt="Illustrator">
                     </li>
                     <li>
                         <img class="light" src="assets/img/icons/hotjar_light.png" alt="Hotjar">
                         <img class="dark" src="assets/img/icons/hotjar.png" alt="Hotjar">
                     </li>
                     <li>
                         <img class="light" src="assets/img/icons/invision_light.png" alt="Invision">
                         <img class="dark" src="assets/img/icons/invision.png" alt="Invision">
                     </li>
                     <li>
                         <img class="light" src="assets/img/icons/photoshop_light.png" alt="Photoshop">
                         <img class="dark" src="assets/img/icons/photoshop.png" alt="Photoshop">
                     </li>
                     <li>
                         <img class="light" src="assets/img/icons/figma_light.png" alt="Figma">
                         <img class="dark" src="assets/img/icons/figma.png" alt="Figma">
                     </li>
                 </ul>
             </div>
             <div class="col-lg-6">
                 <div class="about__content">
                     <div class="section__title">
                         <span class="sub-title">01 - About me</span>
                         <h2 class="title">I have transform your ideas into remarkable digital products</h2>
                     </div>
                     <div class="about__exp">
                         <div class="about__exp__icon">
                             <img src="assets/img/icons/about_icon.png" alt="">
                         </div>
                         <div class="about__exp__content">
                             <p>20+ Years Experience In this game, Means <br> Product Designing</p>
                         </div>
                     </div>
                     <p class="desc">I love to work in User Experience & User Interface designing. Because I love to solve the design problem and find easy and better solutions to solve it. I always try my best to make good user interface with the best user experience. I have been working as a UX Designer</p>
                     <a href="about.html" class="btn">Download my resume</a>
                 </div>
             </div>
         </div>
     </div>
 </section> --}}
 <!-- about-area-end -->

 <!-- layanan-area -->
 <section class="work__process">
    <div class="container">
        <div class="row work__process__wrap justify-content-between">
            <div class="col">
                <div class="work__process__item">
                    <span class="work__process_step">Klinik - 01</span>
                    <div class="work__process__icon">
                        <img class="light" src="{{ asset('templates/frontend/img/icons/services_light_icon03.png') }}" alt="">
                        <img class="dark" src="{{ asset('templates/frontend/img/icons/services_icon03.png') }}" alt="">
                    </div>
                    <div class="work__process__content">
                        <h4 class="title">Komoditas Unggulan</h4>
                        <p>Ketahui pengertian, penyakit, pencegahan serta pemulihan dari jenis komoditi</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="work__process__item">
                    <span class="work__process_step">Klinik - 02</span>
                    <div class="work__process__icon">
                        <img class="light" src="{{ asset('templates/frontend/img/icons/wp_light_icon01.png') }}" alt="">
                        <img class="dark" src="{{ asset('templates/frontend/img/icons/wp_icon01.png') }}" alt="">
                    </div>
                    <div class="work__process__content">
                        <h4 class="title">Artikel Perkebunan</h4>
                        <p>Ketahui update, tips terbaru artikel tentang perkebunan</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="work__process__item">
                    <span class="work__process_step">Klinik - 03</span>
                    <div class="work__process__icon">
                        <img class="light" src="{{ asset('templates/frontend/img/icons/wp_light_icon04.png') }}" alt="">
                        <img class="dark" src="{{ asset('templates/frontend/img/icons/wp_icon04.png') }}" alt="">
                    </div>
                    <div class="work__process__content">
                        <h4 class="title">Konsultasi Online</h4>
                        <p>Temukan solusi pada tanaman anda. Kami siap menjawab pertanyaan anda</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- layanan-area-end -->

 <!-- komoditas-area -->
    @include('front.section.komoditas')
 <!-- komoditas-area-end -->

 <!-- portfolio-area -->
 {{-- <section class="portfolio">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-xl-6 col-lg-8">
                 <div class="section__title text-center">
                     <span class="sub-title">04 - Portfolio</span>
                     <h2 class="title">All creative work</h2>
                 </div>
             </div>
         </div>
         <div class="row justify-content-center">
             <div class="col-xl-10 col-lg-12">
                 <ul class="nav nav-tabs portfolio__nav" id="portfolioTab" role="tablist">
                     <li class="nav-item" role="presentation">
                         <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button"
                             role="tab" aria-controls="all" aria-selected="true">All</button>
                     </li>
                     <li class="nav-item" role="presentation">
                         <button class="nav-link" id="website-tab" data-bs-toggle="tab" data-bs-target="#website" type="button"
                             role="tab" aria-controls="website" aria-selected="false">website</button>
                     </li>
                     <li class="nav-item" role="presentation">
                         <button class="nav-link" id="apps-tab" data-bs-toggle="tab" data-bs-target="#apps" type="button" role="tab" aria-controls="apps" aria-selected="false">mobile apps</button>
                     </li>
                     <li class="nav-item" role="presentation">
                         <button class="nav-link" id="dashboard-tab" data-bs-toggle="tab" data-bs-target="#dashboard" type="button"
                             role="tab" aria-controls="dashboard" aria-selected="false">Dashboard</button>
                     </li>
                     <li class="nav-item" role="presentation">
                         <button class="nav-link" id="landing-tab" data-bs-toggle="tab" data-bs-target="#landing" type="button"
                             role="tab" aria-controls="landing" aria-selected="false">landing page</button>
                     </li>
                     <li class="nav-item" role="presentation">
                         <button class="nav-link" id="branding-tab" data-bs-toggle="tab" data-bs-target="#branding" type="button"
                             role="tab" aria-controls="branding" aria-selected="false">Branding</button>
                     </li>
                     <li class="nav-item" role="presentation">
                         <button class="nav-link" id="graphic-tab" data-bs-toggle="tab" data-bs-target="#graphic" type="button"
                             role="tab" aria-controls="graphic" aria-selected="false">Graphic Design</button>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
     <div class="tab-content" id="portfolioTabContent">
         <div class="tab-pane show active" id="all" role="tabpanel" aria-labelledby="all-tab">
             <div class="container">
                 <div class="row gx-0 justify-content-center">
                     <div class="col">
                         <div class="portfolio__active">
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img01.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Apps Design</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img02.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Design</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img03.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>UX/UI Design</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img04.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Development</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img05.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Development</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img06.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Development</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img07.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Development</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="tab-pane" id="website" role="tabpanel" aria-labelledby="website-tab">
             <div class="container">
                 <div class="row gx-0 justify-content-center">
                     <div class="col">
                         <div class="portfolio__active">
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img07.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Development</span>
                                     <h4 class="title"><a href="portfolio-details.html">Nature of Business Strategy System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img06.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Development</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img01.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Apps Design</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img02.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Design</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img03.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>UX/UI Design</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img04.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Development</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img05.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Development</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="tab-pane" id="apps" role="tabpanel" aria-labelledby="apps-tab">
             <div class="container">
                 <div class="row gx-0 justify-content-center">
                     <div class="col">
                         <div class="portfolio__active">
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img06.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Development</span>
                                     <h4 class="title"><a href="portfolio-details.html">Product Design and Development</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img01.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Apps Design</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img02.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Design</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img03.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>UX/UI Design</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img04.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Development</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img05.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Development</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img07.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Development</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="tab-pane" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
             <div class="container">
                 <div class="row gx-0 justify-content-center">
                     <div class="col">
                         <div class="portfolio__active">
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img05.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Development</span>
                                     <h4 class="title"><a href="portfolio-details.html">Brand strategy System Management</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img01.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Apps Design</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img02.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Design</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img03.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>UX/UI Design</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img04.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Development</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img06.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Development</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img07.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Development</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="tab-pane" id="landing" role="tabpanel" aria-labelledby="landing-tab">
             <div class="container">
                 <div class="row gx-0 justify-content-center">
                     <div class="col">
                         <div class="portfolio__active">
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img04.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Development</span>
                                     <h4 class="title"><a href="portfolio-details.html">Visual Design System Management</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img01.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Apps Design</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img02.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Design</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img03.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>UX/UI Design</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img05.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Development</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img06.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Development</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img07.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Development</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="tab-pane" id="branding" role="tabpanel" aria-labelledby="branding-tab">
             <div class="container">
                 <div class="row gx-0 justify-content-center">
                     <div class="col">
                         <div class="portfolio__active">
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img03.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>UX/UI Design</span>
                                     <h4 class="title"><a href="portfolio-details.html">Animation Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img01.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Apps Design</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img02.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Design</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img04.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Development</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img05.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Development</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img06.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Development</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img07.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Development</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="tab-pane" id="graphic" role="tabpanel" aria-labelledby="graphic-tab">
             <div class="container">
                 <div class="row gx-0 justify-content-center">
                     <div class="col">
                         <div class="portfolio__active">
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img02.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Design</span>
                                     <h4 class="title"><a href="portfolio-details.html">Graphic Design Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img01.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Apps Design</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img03.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>UX/UI Design</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img04.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Development</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img05.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Development</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img06.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Development</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                             <div class="portfolio__item">
                                 <div class="portfolio__thumb">
                                     <img src="assets/img/portfolio/portfolio_img07.jpg" alt="">
                                 </div>
                                 <div class="portfolio__overlay__content">
                                     <span>Web Development</span>
                                     <h4 class="title"><a href="portfolio-details.html">Banking Management System</a></h4>
                                     <a href="portfolio-details.html" class="link">Case Study</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section> --}}
 <!-- portfolio-area-end -->

 <!-- partner-area -->
 {{-- <section class="partner">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-lg-6">
                 <ul class="partner__logo__wrap">
                     <li>
                         <img class="light" src="assets/img/icons/partner_light01.png" alt="">
                         <img class="dark" src="assets/img/icons/partner_01.png" alt="">
                     </li>
                     <li>
                         <img class="light" src="assets/img/icons/partner_light02.png" alt="">
                         <img class="dark" src="assets/img/icons/partner_02.png" alt="">
                     </li>
                     <li>
                         <img class="light" src="assets/img/icons/partner_light03.png" alt="">
                         <img class="dark" src="assets/img/icons/partner_03.png" alt="">
                     </li>
                     <li>
                         <img class="light" src="assets/img/icons/partner_light04.png" alt="">
                         <img class="dark" src="assets/img/icons/partner_04.png" alt="">
                     </li>
                     <li>
                         <img class="light" src="assets/img/icons/partner_light05.png" alt="">
                         <img class="dark" src="assets/img/icons/partner_05.png" alt="">
                     </li>
                     <li>
                         <img class="light" src="assets/img/icons/partner_light06.png" alt="">
                         <img class="dark" src="assets/img/icons/partner_06.png" alt="">
                     </li>
                 </ul>
             </div>
             <div class="col-lg-6">
                 <div class="partner__content">
                     <div class="section__title">
                         <span class="sub-title">05 - partners</span>
                         <h2 class="title">I proud to have collaborated with some awesome companies</h2>
                     </div>
                     <p>I'm a bit of a digital product junky. Over the years, I've used hundreds of web and mobile apps in different industries and verticals. Eventually, I decided that it would be a fun challenge to try designing and building my own.</p>
                     <a href="contact.html" class="btn">Start a conversation</a>
                 </div>
             </div>
         </div>
     </div>
 </section> --}}
 <!-- partner-area-end -->

 <!-- testimonial-area -->
 {{-- <section class="testimonial">
     <div class="container">
         <div class="row align-items-center justify-content-between">
             <div class="col-lg-6 order-0 order-lg-2">
                 <ul class="testimonial__avatar__img">
                     <li><img src="assets/img/images/testi_img01.png" alt=""></li>
                     <li><img src="assets/img/images/testi_img02.png" alt=""></li>
                     <li><img src="assets/img/images/testi_img03.png" alt=""></li>
                     <li><img src="assets/img/images/testi_img04.png" alt=""></li>
                     <li><img src="assets/img/images/testi_img05.png" alt=""></li>
                     <li><img src="assets/img/images/testi_img06.png" alt=""></li>
                     <li><img src="assets/img/images/testi_img07.png" alt=""></li>
                 </ul>
             </div>
             <div class="col-xl-5 col-lg-6">
                 <div class="testimonial__wrap">
                     <div class="section__title">
                         <span class="sub-title">06 - Client Feedback</span>
                         <h2 class="title">Happy clients feedback</h2>
                     </div>
                     <div class="testimonial__active">
                         <div class="testimonial__item">
                             <div class="testimonial__icon">
                                 <i class="fas fa-quote-left"></i>
                             </div>
                             <div class="testimonial__content">
                                 <p>We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and experienced people with a passion for financial markets. Our goal is to achieve continuous.</p>
                                 <div class="testimonial__avatar">
                                     <span>Rasalina De Wiliamson</span>
                                 </div>
                             </div>
                         </div>
                         <div class="testimonial__item">
                             <div class="testimonial__icon">
                                 <i class="fas fa-quote-left"></i>
                             </div>
                             <div class="testimonial__content">
                                 <p>We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and experienced people with a passion for financial markets. Our goal is to achieve continuous.</p>
                                 <div class="testimonial__avatar">
                                     <span>Rasalina De Wiliamson</span>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="testimonial__arrow"></div>
                 </div>
             </div>
         </div>
     </div>
 </section> --}}
 <!-- testimonial-area-end -->

 <!-- artikel-area -->
 @include('front.section.artikel')
 <!-- artikel-area-end -->

 <!-- konsultasi-area -->
 @include('front.section.konsultasi')
 <!-- konsultasi-area-end -->

@endsection
