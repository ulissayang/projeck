<x-guest.app-layout title="Galery Video">
  <main id="main">

    {{-- start heading --}}
    <x-guest.heading title="Galery Video" linkText="Galery Video" content="Sekolah Dasar Negeri 260 Maluku Tengah" />
    {{-- End heading --}}

    <section class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <!-- ======= Content Section ======= -->
          <div class="col-lg-8 posts-list">
            <div class="row gy-4">

              @foreach ($video as $data)
              <div class=" col-md-6">
                <article>
                  <div class="post-img d-flex align-items-center justify-content-center">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $data->judul }}"
                      title="YouTube video player" frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                      allowfullscreen></iframe>
                  </div>

                  <p class="badge rounded bg-secondary small">Galery Video</p>

                  <h2 class="title">
                    <p>{{ $data->deskripsi }}</p>
                  </h2>

                  <div class="d-flex justify-content-between">

                    <p class="small"><i class="text-warning bi bi-person"></i> {{ $data->user->name }}</p>
                    <p class="small"><i class="text-warning bi bi-calendar3"></i> {{ (new
                      \Carbon\Carbon($data->created_at))->format('d F Y') }}</p>

                  </div>

                </article>
              </div><!-- End post list item -->
              @endforeach

            </div>
            <div class="float-end pt-4">

              {{ $video->links() }}

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