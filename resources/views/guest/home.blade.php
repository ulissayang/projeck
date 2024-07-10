<x-guest.app-layout>
  <!-- ======= Hero Section ======= -->
  <x-guest.hero-home>
    <x-slot name="title">
      {{ $nama_web }}
    </x-slot>
    <x-slot name="banner">
      {{ $banner }}
    </x-slot>
  </x-guest.hero-home>
  <!-- End Hero Section -->

  {{-- Main --}}
  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Sejarah dan Informasi Sekolah</h2>
          <p>SD Negeri 260 Maluku Tengah merupakan sekolah dasar yang berlokasi di Desa Haria, Kecamatan Saparua,
            Kabupaten Maluku Tengah, Provinsi Maluku. Didirikan pada tanggal 2 Oktober 1970, sekolah ini berstatus
            negeri dan dimiliki oleh Pemerintah Daerah.</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">

            <img src="{{ asset('guest/assets/img/banner-sekolah.jpeg') }}" class="img-fluid rounded-4 mb-4" alt="">

          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p>Sekolah Dasar Negeri 260 Maluku Tengah, yang berlokasi di Desa Haria, Kecamatan Saparua, Kabupaten
                Maluku
                Tengah, Provinsi Maluku, didirikan berdasarkan SK Pendirian pada tanggal 2 Oktober 1970. Sekolah ini
                memiliki NPSN 60100674 dan berstatus negeri, dimiliki oleh Pemerintah Daerah.</p>
              <p class="fst-italic">
                Dengan status kepemilikan oleh Pemerintah Daerah, sekolah ini memperoleh izin operasional melalui SK
                Izin Operasional nomor 421-112 Tahun 2021 yang diterbitkan pada 20 Januari 2021.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Alamat: Desa Haria, RT/RW: 0/0, Kode Pos: 97592</li>
                <li><i class="bi bi-check-circle-fill"></i> Kelurahan: Haria, Kecamatan: Saparua</li>
                <li><i class="bi bi-check-circle-fill"></i> Kabupaten/Kota: Maluku Tengah, Provinsi: Maluku</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->
    {{-- <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
            </div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
            </div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
            </div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
            </div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
            </div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
            </div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
            </div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Clients Section --> --}}

    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="mb-5 row text-center align-items-center justify-content-between">
          <div class="col-md-4">
            <h2 class="fw-bold">Kegiatan</h2>
          </div>
          <div class="col-md-4">
            <p class="small">Berbagai kegiatan dari SD Negeri 260 Maluku Tengah</p>
          </div>
          <div class="col-md-4 text-md-end">
            <a href="{{ url('kegiatan-sekolah') }}" class="btn btn-sm border border-success text-success">
              Lihat Semua Kegiatan
            </a>
          </div>
        </div>


        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

          {{-- Kegiatan terbaru --}}
          @if ($kegiatan->count() == 0)
          <img src="{{ asset('assets/img/not-data.png') }}" class="img-fluid m-auto" style="max-width: 40%" alt="Foto">
          @else
          @foreach ($kegiatan as $data)
          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="image position-relative">
                <div class="date-card position-absolute bg-dark-transparent rounded">
                  <div class="position-relative text-center py-1 text-white">
                    <div class="hari fs-1 fw-bold" style="font-size: 1rem;">{{ (new
                      \Carbon\Carbon($data->created_at))->format('d') }}</div>
                    <div class="bulan" style="font-size: 0.8rem;">{{ (new \Carbon\Carbon($data->created_at))->format('F,
                      Y') }}</div>
                  </div>
                </div>
                {{-- kalau ada image --}}
                @if ($data->image != null)
                <img src="{{ 'storage/' . $data->image }}" alt="{{ $data->title }}" class="card-img">
                @else
                <img src="{{ asset('guest/assets/img/keg-sekolah.svg') }}" alt="Kegiatan Sekolah">
                @endif
              </div>
              <div class="content">
                <h3>{{ $data->title }}</h3>
                <div>
                  <span class="text-muted small"><i class="text-warning bi bi-person-fill"></i> {{ $data->user->name
                    }}</span>
                </div>
                <p class="pt-3">{{ $data->excerpt }}</p>
                <a href="{{ route('kegiatan-sekolah-show', $data->slug) }}"
                  class="readmore stretched-link text-end d-block">Baca
                  Selengkapnya <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>

          </div>
          @endforeach
          @endif



          <!-- End Service Item -->



        </div>
      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Agenda Home Section ======= -->
    <section id="agenda-home" class="agenda-home">
      <div class="container" data-aos="fade-up">

        <div class="mb-5 row text-center d-flex flex-wrap text-white align-items-center justify-content-between">
          <div class="col-md-4">
            <h2 class="fw-bold">Agenda</h2>
          </div>
          <div class="col-md-4">
            <p class="small">Berbagai agenda dari SD Negeri 260 Maluku Tengah</p>
          </div>
          <div class="col-md-4 text-md-end">
            <a href="{{ url('agenda-sekolah') }}" class="btn btn-sm bg-white text-success">
              Lihat Semua Agenda
            </a>
          </div>
        </div>

        <div class=" agenda-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            {{-- Agenda terbaru --}}
            @foreach ($agenda as $data)
            <div class="swiper-slide">
              <div class="card overflow-hidden" style="width: 20rem;">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <span class="small mb-2 text-body-secondary"><i class="text-warning bi bi-calendar3"></i> {{
                      \Carbon\Carbon::parse($data->date_time)->format('d F Y') }}</span>
                    <span class="small mb-2 text-body-secondary"><i class="text-warning bi bi-clock"></i> {{
                      \Carbon\Carbon::parse($data->date_time)->format('H:i') }} WIT - Selesai</span>
                  </div>
                  <h5 class="card-text pt-2">
                    <a data-bs-toggle="modal" data-bs-target="#modalagenda{{ $data->id }}">
                      {{-- batasi hanya 33 karakter dari title --}}
                      {{ \Illuminate\Support\Str::limit($data->title, 20) }}
                    </a>
                  </h5>
                  <p class="small"><i class="text-warning bi bi-geo-alt"></i> {{ $data->location }}</p>
                </div>
              </div>
            </div>
            @endforeach

          </div>
          <div class="swiper-pagination"></div>
        </div>

        {{-- include modal --}}
        @foreach ($agenda as $item)
        <x-guest.modal :title="$item->title" :dateTime="$item->date_time" :description="$item->description"
          :location="$item->location" type="agenda" :id="$item->id" />
        @endforeach

      </div>
    </section>
    <!-- End Agenda Home Section -->

    <!-- ======= Call To Action Section ======= -->
    {{-- <section id="call-to-action" class="call-to-action">
      <div class="container text-center" data-aos="zoom-out">
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
        <h3>Call To Action</h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
          anim id est laborum.</p>
        <a class="cta-btn" href="#">Call To Action</a>
      </div>
    </section><!-- End Call To Action Section --> --}}

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Tenaga Pendidik</h2>
          <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti
            fignissimos eos quam</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Saul Goodman</h3>
                      <h4>Ceo &amp; Founder</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                    suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                    Maecen aliquam, risus at semper.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Sara Wilsson</h3>
                      <h4>Designer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum
                    quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat
                    irure amet legam anim culpa.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Jena Karlis</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis
                    sint minim.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Matt Brandon</h3>
                      <h4>Freelancer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore
                    quem dolore.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>John Larson</h3>
                      <h4>Entrepreneur</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                    noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam
                    esse veniam culpa fore.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    {{-- <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Portfolio</h2>
          <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et
            autem uia reprehenderit sunt deleniti</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
          data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-product">Product</li>
              <li data-filter=".filter-branding">Branding</li>
              <li data-filter=".filter-books">Books</li>
            </ul><!-- End Portfolio Filters -->
          </div>

          <div class="row gy-4 portfolio-container">

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">App 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/product-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Product 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/branding-1.jpg" data-gallery="portfolio-gallery-app"
                  class="glightbox"><img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Branding 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/books-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/app-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">App 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/product-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Product 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/branding-2.jpg" data-gallery="portfolio-gallery-app"
                  class="glightbox"><img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Branding 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/books-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Books 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/app-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">App 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/product-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Product 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/branding-3.jpg" data-gallery="portfolio-gallery-app"
                  class="glightbox"><img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Branding 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="assets/img/portfolio/books-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Books 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section --> --}}

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Tenaga Pendidik</h2>
          <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt
            quis dolorem dolore earum</p>
        </div>

        <div class="row gy-4">

          @if ($guru->count() == 0)
          <img src="{{ asset('assets/img/not-data.png') }}" class="img-fluid m-auto" style="max-width: 40%" alt="">
          @else
          @foreach ($guru as $data)
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member ">
              <img src="{{ 'storage/guru-images/thumbnail/'. $data->image  }}" class="img-fluid"
                alt="{{ $data->nama }}">
              <h4>{{ $data->nama }}</h4>
              <span>{{ $data->jabatan }}</span>

            </div>
          </div><!-- End Team Member -->
          @endforeach
          @endif
          {{-- <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <h4>Sarah Jhinson</h4>
              <span>Marketing</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <h4>William Anderson</h4>
              <span>Content</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member --> --}}

        </div>

        <div class="text-center py-4 my-4">
          <a href="{{ url('data-guru') }}" class="text-success ">Lihat Semua Guru <i class="bi bi-arrow-right"></i></a>
        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Pricing Section ======= -->
    {{-- <section id="pricing" class="pricing sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Pricing</h2>
          <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat
            sunt id nobis omnis tiledo stran delop</p>
        </div>

        <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Free Plan</h3>
              <div class="icon">
                <i class="bi bi-box"></i>
              </div>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span>
                </li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4">
            <div class="pricing-item featured">
              <h3>Business Plan</h3>
              <div class="icon">
                <i class="bi bi-airplane"></i>
              </div>

              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Developer Plan</h3>
              <div class="icon">
                <i class="bi bi-send"></i>
              </div>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>
    </section><!-- End Pricing Section --> --}}

    <!-- ======= Frequently Asked Questions Section ======= -->
    {{-- <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="content px-xl-5">
              <h3>Frequently Asked <strong>Questions</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>
          </div>

          <div class="col-lg-8">

            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-1">
                    <span class="num">1.</span>
                    Non consectetur a erat nam at lectus urna duis?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                    laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor
                    rhoncus dolor purus non.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-2">
                    <span class="num">2.</span>
                    Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                    interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                    scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                    Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-3">
                    <span class="num">3.</span>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                    Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl
                    suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis
                    convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-4">
                    <span class="num">4.</span>
                    Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                    interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                    scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                    Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-5">
                    <span class="num">5.</span>
                    Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim
                    suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan.
                    Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit
                    turpis cursus in
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section --> --}}

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Recent Blog Posts</h2>
          <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel
            architecto accusamus fugit aut qui distinctio</p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Politics</p>

              <h2 class="title">
                <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Maria Doe</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jan 1, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Sports</p>

              <h2 class="title">
                <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Allisa Mayer</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 5, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Entertainment</p>

              <h2 class="title">
                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et
                  soluta</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Mark Dower</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 22, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

      </div>
    </section><!-- End Recent Blog Posts Section -->


  </main><!-- End #main -->
</x-guest.app-layout>