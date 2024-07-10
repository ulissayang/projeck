<!-- ======= Header ======= -->
<section id="topbar" class="topbar d-flex align-items-center">
  <div class="container d-flex justify-content-center justify-content-md-between">
    <div class="contact-info d-flex align-items-center">
      <i class="bi bi-envelope d-flex align-items-center"><a
          href="mailto:leuwolyopi@gmail.com">leuwolyopi@gmail.com</a></i>
      <i class="bi bi-phone d-flex align-items-center ms-4"><span>082397642027</span></i>
    </div>
    <div class="social-links d-none d-md-flex align-items-center">
      <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
    </div>
  </div>
</section><!-- End Top Bar -->

<header id="header" class="header d-flex align-items-center">

  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    <a href="index.html" class="logo d-flex align-items-center">
      <h1>Sdn 260 Malteng<span>.</span></h1>
    </a>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="{{ url('/') }}">Home</a></li>

        <li class="dropdown"><span>Profil Sekolah<i class="bi bi-chevron-down dropdown-indicator"></i></span>
          <ul>
            <li><a href="{{ url('visi-misi-sekolah') }}">Visi Misi</a></li>
            <li><a href="{{ url('data-guru') }}">Data Guru / Staff</a></li>
            <li><a href="{{ url('fasilitas-sekolah') }}">Fasilitas</a></li>
          </ul>
        </li>

        <li class="dropdown"><span>Informasi<i class="bi bi-chevron-down dropdown-indicator"></i></span>
          <ul>
            <li><a href="{{ url('kegiatan-sekolah') }}">Kegiatan</a></li>
            <li><a href="{{ url('agenda-sekolah') }}">Agenda</a></li>
            <li><a href="{{ url('pengumuman-sekolah') }}">Pengumuman</a></li>
            <li><a href="{{ url('prestasi-ak') }}">Prestasi</a></li>
          </ul>
        </li>

        <li class="dropdown"><span>Galery<i class="bi bi-chevron-down dropdown-indicator"></i></span>
          <ul>
            <li><a href="{{ url('galery-foto-sekolah') }}">Galery Foto</a></li>
            <li><a href="{{ url('galery-video-sekolah') }}">Galery Video</a></li>
          </ul>
        </li>
        <li><a href="{{ url('kontak-sekolah') }}">Kontak</a></li>
      </ul>
    </nav><!-- .navbar -->

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

  </div>
</header><!-- End Header -->
<!-- End Header -->