<x-guest.app-layout title="Data Guru">
  <main id="main">

    {{-- start heading --}}
    <x-guest.heading title="Data Guru" linkText="Data Guru" content="Sekolah Dasar Negeri 260 Maluku Tengah" />
    {{-- End heading --}}




    <section id="blog" class="blog team">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <!-- ======= Data Pendidik  ======= -->
          <div class="col-lg-8">

            <div class="row gy-4">
              @if ($guru->count() == 0)
              <div class="py-5 my-5 text-center">
                <img src="{{ asset('assets/img/not-data.png') }}" class="img-fluid" style="max-width: 40%" alt="No Data"
                  loading="lazy">
                <p class="text-center text-muted">Tidak Ada Data Yang Bisa Di Tampilkan</p>
              </div>
              @else
              @foreach ($guru as $data)
              <div class="col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                  <img src="{{ 'storage/guru-images/thumbnail/'. $data->image  }}" class="img-fluid"
                    alt="{{ $data->nama }}" loading="lazy">
                  <h4>{{ $data->nama }}</h4>
                  <span>{{ $data->jabatan }}</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div><!-- End Team Member -->
              @endforeach
              @endif


            </div>

          </div>
          <!-- End Data Pendidik Section -->

          {{-- start sidebar --}}
          <div class="col-lg-4">

            <x-guest.sidebar />

          </div>
          {{-- end sidebar --}}

        </div>



      </div>
    </section>

  </main><!-- End #main -->

</x-guest.app-layout>