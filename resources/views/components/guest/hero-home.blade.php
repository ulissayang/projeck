<section id="hero" class="hero">

  {{-- <div class="container position-relative">
    <div class="row gy-5" data-aos="fade-in">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
        <h4 class="text-warning fw-bold fst-italic">Back to👋</h4>
        <h2>{{ $title }}</h2>
        <p>{{ $home }}</p>
        <div class="d-flex justify-content-center justify-content-lg-start">
          <a href="#kegiatan" class="btn-get-started">Get Started</a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2">
        <img src="{{ 'storage/'. $banner  }}" class="img-fluid" loading="lazy" alt="" data-aos="zoom-out"
          data-aos-delay="100">
      </div>
    </div>
  </div> --}}

  <!-- Carousel Wrapper -->
  <div id="customCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="container position-relative">
          <div class="row gy-5" data-aos="fade-in">
            <div
              class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
              <h4 class="text-warning fw-bold fst-italic">Back to👋</h4>
              <h2>{{ $title }}</h2>
              <p>{{ $home }}</p>
              <div class="d-flex justify-content-center justify-content-lg-start">
                <a href="#kegiatan" class="btn-get-started">Get Started</a>
              </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
              <img src="{{ 'storage/'. $banner }}" class="img-fluid" loading="lazy" alt="" data-aos="zoom-out"
                data-aos-delay="100">
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="container position-relative">
          <div class="row gy-5" data-aos="fade-in">
            <div
              class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
              <h4 class="text-warning fw-bold fst-italic">Back to👋</h4>
              <h2>{{ $title }}</h2>
              <p>{{ $home }}</p>
              <div class="d-flex justify-content-center justify-content-lg-start">
                <a href="#kegiatan" class="btn-get-started">Get Started</a>
              </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
              <img src="{{ 'storage/'. $banner }}" class="img-fluid" loading="lazy" alt="" data-aos="zoom-out"
                data-aos-delay="100">
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="container position-relative">
          <div class="row gy-5" data-aos="fade-in">
            <div
              class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
              <h4 class="text-warning fw-bold fst-italic">Back to👋</h4>
              <h2>{{ $title }}</h2>
              <p>{{ $home }}</p>
              <div class="d-flex justify-content-center justify-content-lg-start">
                <a href="#kegiatan" class="btn-get-started">Get Started</a>
              </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
              <img src="{{ 'storage/'. $banner }}" class="img-fluid" loading="lazy" alt="" data-aos="zoom-out"
                data-aos-delay="100">
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#customCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#customCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="icon-boxes position-relative">
    <div class="container position-relative">
      <div class="icon-box row gy-4 mt-5 justify-content-center m-auto" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6 col-md-12">
          <h3 class="text-white fw-bold">{{ $judul }}</h3>
          <p class="text-start">{!! $deskripsi !!}</p>
          <a href="{{ url('sejarah-sekolah') }}" class="">Lihat Detail <i
              class="ms-2 bi bi-arrow-right-circle-fill"></i></a>
        </div>
        <div class="col-lg-6 col-md-12">
          <h3 class="text-white fw-bold">Data Sekolah</h3>

          <div class="row justify-content-center box-data">
            <div class="text-white col-lg-3 col-6">
              <span class="d-block fs-1 fw-bold">
                @if ($guru == 0)
                0
                @else
                {{ $guru }}
                @endif
              </span>
              <span class="d-block small">Guru & Staff</span>
            </div>
            <div class="text-white col-lg-3 col-6">
              <span class="d-block fs-1 fw-bold">
                @if ($fasilitas == 0)
                0
                @else
                {{ $fasilitas }}
                @endif
              </span>
              <span class="d-block small">Fasilitas</span>
            </div>
            <div class="text-white col-lg-3 col-6">
              <span class="d-block fs-1 fw-bold">{{ $akreditas }}</span>
              <span class="d-block small">Akreditas</span>
            </div>
            <div class="text-white col-lg-3 col-6">
              <span class="d-block fs-1 fw-bold">
                @if ($prestasi == 0)
                0
                @else
                {{ $prestasi }}
                @endif
              </span>
              <span class="d-block small">Prestasi</span>
            </div>
            <div>
              <a href="{{ url('visi-misi-sekolah') }}" class="btn btn-sm border text-white mt-5"><i
                  class="bi bi-record-circle"></i> Visi & Misi</a>
            </div>
          </div>
        </div>
      </div>
      <!--End Icon Box -->


    </div>
  </div>

</section>