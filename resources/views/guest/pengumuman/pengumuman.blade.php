<x-guest.app-layout title="Pengumuman">
  <main id="main">
    {{-- start heading --}}
    <x-guest.heading title="Pengumuman" linkText="Pengumuman" content="Sekolah Dasar Negeri 260 Maluku Tengah" />
    {{-- End heading --}}

    <section class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row g-5">
          <!-- ======= Content Section ======= -->
          <div class="col-lg-8 posts-list">
            <div class="row gy-4">
              @foreach ($pengumuman as $item)
              <div class="col-md-6">
                <article>
                  <div class="post-img mt-4">
                    <img src="{{ asset('guest/assets/img/pengumuman-logo.svg') }}" alt="{{ $item->title }}"
                      class="img-fluid" loading="lazy">
                  </div>
                  <h2 class="title">
                    <a data-bs-toggle="modal" data-bs-target="#modalannouncement{{ $item->id }}">
                      {{ $item->title }}
                    </a>
                  </h2>
                  <p>{!! \Illuminate\Support\Str::words(strip_tags($item->body), 10, '...') !!}</p>
                  <div class="d-flex justify-content-between">
                    <p class="small"><i class="text-warning bi bi-geo-alt"></i> {{
                      \Carbon\Carbon::parse($item->updated_at)->locale('id')->diffForHumans() }}</p>
                    <p class="small"><i class="text-warning bi bi-person"></i> {{ $item->user->name }}</p>
                  </div>
                </article>
              </div><!-- End post list item -->
              @endforeach
            </div>
            <div class="float-end pt-4">

              {{ $pengumuman->links() }}

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

    {{-- include modal --}}
    @foreach ($pengumuman as $item)
    <x-guest.modal :title="$item->title" :description="$item->body" :dateTime="$item->updated_at" type="announcement"
      :id="$item->id" />
    @endforeach
  </main><!-- End #main -->
</x-guest.app-layout>