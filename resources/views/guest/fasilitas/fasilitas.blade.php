<x-guest.app-layout title="Fasilitas">
  <style>
    .card-img-top {
      height: 300px;
      object-fit: cover;
      overflow: hidden;
    }

    .badge-fasilitas {
      background-color: #008374;
      color: #fff;
      font-size: 0.7rem;
      position: absolute;
      top: 0;
      left: 0;
      padding: 7px 12px;
      border-radius: 0 0 10px 0;
      /* Membuat sisi kiri badge persegi dan sisi kanan membulat */
    }

    .card-title {
      font-weight: bold;
      color: #003399;
    }
  </style>
  <main id="main">

    {{-- start heading --}}
    <x-guest.heading title="Fasilitas" linkText="Fasilitas" content="Sekolah Dasar Negeri 260 Maluku Tengah" />
    {{-- End heading --}}

    <section class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">
          <!-- ======= Content Section ======= -->
          <div class="col-lg-12">
            <div class="row gy-4">

              @foreach ($fasilitas as $data)
              <div class="col-md-3">
                <a href="{{ route('fasilitas-sekolah-show', $data->slug) }}">
                  <div class="card">
                    <span class="badge badge-fasilitas"><i class="bi bi-building"></i> Fasilitas</span>
                    <img src="{{ 'storage/'. $data->image }}" class="card-img-top" alt="Fasilitas">
                    <div class="card-body">
                      <h5 class="card-title">{{ $data->nama }}</h5>
                      <p class="card-text">{!! Str::limit(strip_tags($data->deskripsi), 100) !!}</p>
                      <span class="float-end badge rounded-pill text-bg-secondary"><i class="bi bi-bookmark-check"></i>
                        {{ $data->keterangan }}</span>
                    </div>
                  </div>
                </a>
              </div>
              @endforeach

            </div>
            {{-- end content section --}}

            {{-- sidebar start --}}
            {{-- <div class="col-lg-4">
              <x-guest.sidebar />
            </div> --}}
            {{-- sidebar end --}}

          </div>
        </div>
    </section>

  </main><!-- End #main -->
</x-guest.app-layout>