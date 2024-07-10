<x-guest.app-layout title="Agenda">
  <main id="main">
    {{-- start heading --}}
    <x-guest.heading title="Agenda" linkText="Agenda" content="Sekolah Dasar Negeri 260 Maluku Tengah" />
    {{-- End heading --}}

    <section class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row g-5">
          <!-- ======= Content Section ======= -->
          <div class="col-lg-8 posts-list">
            <div class="row gy-4">
              @foreach ($agenda as $item)
              <div class="col-md-6">
                <article>
                  <div class="d-flex justify-content-between">
                    <span class="small"><i class="text-warning bi bi-calendar3"></i> {{
                      \Carbon\Carbon::parse($item->date_time)->format('d F Y') }}</span>
                    <span class="small"><i class="text-warning bi bi-clock"></i> {{
                      \Carbon\Carbon::parse($item->date_time)->format('H:i') }} WIT - Selesai</span>
                  </div>
                  <h2 class="title pt-3">
                    <a data-bs-toggle="modal" data-bs-target="#modalagenda{{ $item->id }}">
                      {{ $item->title }}
                    </a>
                  </h2>
                  <div class="d-flex justify-content-between">
                    <p class="small"><i class="text-warning bi bi-geo-alt"></i> {{ $item->location }}</p>
                    <p class="small"><i class="text-warning bi bi-person"></i> {{ $item->user->name }}</p>
                  </div>
                </article>
              </div><!-- End post list item -->
              @endforeach
            </div>
            <div class="float-end pt-4">
              {{ $agenda->links() }}
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
    @foreach ($agenda as $item)
    <x-guest.modal :title="$item->title" :dateTime="$item->date_time" :description="$item->description"
      :location="$item->location" type="agenda" :id="$item->id" />
    @endforeach
  </main><!-- End #main -->
</x-guest.app-layout>