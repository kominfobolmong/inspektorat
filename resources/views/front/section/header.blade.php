<header>
    <div id="sticky-header" class="menu__area transparent-header">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile__nav__toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu__wrap">
                        <nav class="menu__nav">
                            <div class="logo">
                                <a href="/">
                                    <div class="logo-brand d-flex">
                                        <img src="{{ asset('templates/home/logo-inspektorat.png') }}" alt="logo" width="50" />
                                        <h4 style="margin-left: 5px;">INSPEKTORAT DAERAH <br> KAB. BOLAANG MONGONDOW</h4>
                                    </div>
                                </a>
                            </div>
                            <div class="navbar__wrap main__menu d-none d-xl-flex">
                                <ul class="navigation">
                                    <li class="{{ setActive('beranda') }}"><a href="{{ route('beranda') }}">Beranda</a></li>
                                    {{-- <li class="{{ setActive('profil-dinas') }}"><a href="{{ route('profil_dinas') }}">Profil</a></li> --}}

                                    <li class="menu-item-has-children {{ setActive('profil') }}"><a href="#">Profil</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('arti_lambang') }}">Arti Logo/Lambang</a></li>
                                            <li><a href="{{ route('visi_misi') }}">Visi dan Misi</a></li>
                                            <li><a href="{{ route('tugas_fungsi') }}">Tugas dan Fungsi</a></li>
                                            <li><a href="{{ route('struktur_organisasi') }}">Struktur Organisasi</a></li>
                                            <li><a href="{{ route('profil_pimpinan') }}">Profil Pimpinan</a></li>
                                            <li><a href="{{ route('pegawai') }}">Pegawai</a></li>
                                        </ul>
                                    </li>

                                    <li class="{{ setActive('news') }}"><a href="{{ route('news') }}">Berita</a></li>

                                    <li class="menu-item-has-children {{ setActive('galeri') }}"><a href="#">Galeri</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('galeri_foto') }}">Galeri Foto</a></li>
                                            <li><a href="{{ route('galeri_video') }}">Galeri Video</a></li>
                                        </ul>
                                    </li>

                                    <li class="{{ setActive('kontak') }}"><a href="{{ route('kontak') }}">Kontak</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="mobile__menu">
                        <nav class="menu__box">
                            <div class="close__btn"><i class="fal fa-times"></i></div>
                            <div class="nav-logo">
                                {{-- <a href="index.html" class="logo__black"><img src="assets/img/logo/logo_black.png" alt=""></a>
                                <a href="index.html" class="logo__white"><img src="assets/img/logo/logo_white.png" alt=""></a> --}}
                            </div>
                            <div class="menu__outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu__backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>
</header>
