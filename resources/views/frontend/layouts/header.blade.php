<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ Storage::url($profil->logo ?? null) }}" alt="logo-dinas-perkebunan">
        <h1>Dinas Perkebunan<br><span>Kab. Bolaang Mongondow</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>

          <li><a class="nav-link scrollto" href="/">Beranda</a></li>

          <li class="dropdown"><a href="#"><span>Profil Dinas</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#" class="active">Maklumat Pelayanan</a></li>
              <li><a href="#">Sejarah Dinas Perkebunan</a></li>
              <li><a href="#">Visi Misi dan Tupoksi</a></li>
              <li><a href="#">Struktur Organisasi</a></li>
              <li><a href="#">Profil Pimpinan</a></li>
              <li><a href="#">SDM Dinas Perkebunan</a></li>
            </ul>
          </li>

          {{-- <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#" class="active"></a></li>
            </ul>
          </li> --}}

          <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#" class="active">Standar Pelayanan Publik</a></li>
              <li><a href="#">Daftar Informasi Publik</a></li>
              <li><a href="#">Informasi Berkala</a></li>
              <li><a href="#">Informasi Serta Merta</a></li>
              <li><a href="#">Informasi Setiap Saat</a></li>
              <li><a href="#">Informasi Dikecualikan</a></li>
              <li><a href="#">Survey Kepuasan Masyarakat (SKM)</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Media Publikasi</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Dokumentasi Kegiatan</a></li>
              <li><a href="#">Dokumen</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>LIMI</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{ route('klinik_ap') }}" class="active">Klinik Agribisnis Perkebunan</a></li>
              <li><a href="{{ route('budidaya') }}">Budidaya</a></li>
              <li><a href="{{ route('sarana_prasarana') }}">Sarana Prasarana</a></li>
            </ul>
          </li>

          <li><a class="nav-link scrollto" href="#">Kontak</a></li>
          {{-- <li>
            <a class="nav-link scrollto btn-getstarted scrollto" href="#"><strong>L&nbsp;I&nbsp;M&nbsp;I</strong></a>
          </li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
