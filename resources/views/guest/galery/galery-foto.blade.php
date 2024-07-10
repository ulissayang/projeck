<x-guest.app-layout title="Galery">
  <main id="main">

    {{-- start heading --}}
    <x-guest.heading title="Galery Foto" linkText="Galery Foto" content="Sekolah Dasar Negeri 260 Maluku Tengah" />
    {{-- End heading --}}

    <section class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <!-- ======= Content Section ======= -->
          <div class="col-lg-8 posts-list">
            <div class="row gy-4">

              @foreach ($foto as $data)
              <div class=" col-md-6">
                <article>

                  <div class="post-img">
                    @php
                    $images = json_decode($data->image, true);
                    @endphp
                    @if ($images && count($images) > 0)
                    <img src="{{ asset('storage/' . $images[0]) }}" alt="{{ $data->judul }}" class="img-fluid">
                    @endif
                  </div>

                  <p class="small badge bg-secondary text-white">{{ count($images) }} Foto</p>

                  <h2 class="title">
                    <a href="{{ route('galery-foto-show', $data->slug) }}">{{ $data->judul }}</a>
                  </h2>

                  <div class="d-flex justify-content-between">

                    <p class="small text-muted"><i class="me-2 text-warning bi bi-person-fill"></i>{{ $data->user->name }}</p>
                    <p class="small text-muted"><i class="me-2 text-warning bi bi-calendar-date"></i>
                      {{ \Carbon\Carbon::parse($data->created_at)->isoFormat('D MMMM YYYY') }}
                    </p>

                  </div>

                </article>
              </div><!-- End post list item -->
              @endforeach

            </div>
            <div class="float-end pt-4">

              {{ $foto->links() }}

            </div><!-- End pagination -->
          </div>
          {{-- end content section --}}

          {{-- sidebar start --}}
          <div class="col-lg-4">
            <x-guest.sidebar />
          </div>
          {{-- sidebar end --}}

        </div>
      </div>
    </section>

  </main><!-- End #main -->
</x-guest.app-layout>