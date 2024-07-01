{{-- <x-app-layout>
  @slot('title', 'Show Agenda')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Agenda Show</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Informasi</li>
          <li class="breadcrumb-item">Agenda</li>
          <li class="breadcrumb-item active">Show</li>
        </ol>
      </nav>
    </div><!-- End Page Title --> --}}

    {{-- <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <div class="card-title">
                <x-button as="a" href="{{ route('agenda.index') }}" class="btn-sm">
                  <i class="bi bi-arrow-left-circle"></i> Kembali
                </x-button>
              </div>

              <!-- Tampilkan data agenda -->
              <div class="row"> --}}

                {{-- col title --}}
                {{-- <div class="col-md-12 col-8 pagetitle mb-4 order-md-1 order-2">
                  <h1 class="text-md-center fw-bold">{{ $agenda->title }}</h1>
                </div> --}}

                {{-- col date_time --}}
                {{-- <div class="col-md-2 col-4 mb-4 order-md-2 order-1">
                  <div class="position-relative text-center rounded bg-dark py-1">
                    <i class="bi bi-calendar4-week text-light d-block w-100 h-100"
                      style="font-size: 4rem; opacity: 0.2;"></i>
                    <div class="position-absolute top-50 start-50 translate-middle text-center"
                      style="font-size: 1.5rem; color: gold;">
                      <div class="hari fs-1 fw-bold" style="font-size: 2rem;">{{ (new
                        \Carbon\Carbon($agenda->date_time))->format('d') }}</div>
                      <div class="bulan" style="font-size: 0.8rem;">{{ (new
                        \Carbon\Carbon($agenda->date_time))->format('F, Y') }}
                      </div>
                    </div>
                  </div>
                </div> --}}

                {{-- col heading --}}
                {{-- <div class="col-md-10 order-3">
                  <div
                    class="row justify-content-around p-2 mb-4 bg-info bg-opacity-10 border border-info border-start-0 border-end-0">

                    <div class="col-md-3 col-6 mb-md-0 mb-3"> <i class="bi bi-person-circle text-primary"></i> {{
                      $agenda->user->name }}</div>

                    <div class="col-md-3 col-6"> <i class="bi bi-calendar4-event text-secondary"></i>
                      @if (\Carbon\Carbon::parse($agenda->date_time)->isPast())
                      Sudah Selesai
                      @elseif (\Carbon\Carbon::parse($agenda->date_time)->isToday())
                      Berlangsung
                      @else
                      Segera
                      @endif
                    </div>

                    <div class="col-md-3 col-6 mb-md-0 mb-3"> <i class="bi bi-clock text-danger"></i> {{ (new
                      \Carbon\Carbon($agenda->date_time))->format('H : i') }}</div>

                    <div class="col-md-3 col-6"> <i class="bi bi-geo-alt-fill text-success"></i> {{ $agenda->location }}
                    </div>
                  </div>
                  <div class="overflow-x-auto"> --}}
                    {{-- Isi deskripsi --}}
                    {{-- <p>{!! $agenda->description !!}</p>

                  </div>
                </div>
              </div> --}}
              <!-- End Tampilkan data agenda -->

              {{--
            </div>

            <div class="col px-3 py-2 bg-secondary-subtle">
              <div class="float-end text-secondary">
                <span>Updated at: {{ \Carbon\Carbon::parse($agenda->updated_at)->locale('id')->diffForHumans()
                  }},</span>
                <span>Created at: {{ \Carbon\Carbon::parse($agenda->created_at)->locale('id')->isoFormat('dddd, D MMMM
                  YYYY ') }}</span>
              </div>
            </div>
          </div>

        </div>
      </div>



    </section>

  </main><!-- End #main -->


  @push('scripts')

  <!-- Bootstrap 5 -->
  <script type="text/javascript" src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Main js -->
  <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>

  @endpush

</x-app-layout> --}}

<x-app-layout>
  @slot('title', 'Show Agenda')
  <main id="main" class="main">

    <x-back.breadcrumb :title="$title" :breadcrumbs="$breadcrumbs" /><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          
          <x-back.show-data :data="[
            'title' => $agenda->title,
            'description' => $agenda->description,
            'author' => $agenda->user->name,
            'location' => $agenda->location,
            'date_time' => $agenda->date_time,
            'status' => $agenda->date_time,
            'created_at' => $agenda->created_at,
            'updated_at' => $agenda->updated_at,
            ]" :backRoute="route('agenda.index')" />
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  @push('scripts')

  <!-- Bootstrap 5 -->
  <script type="text/javascript" src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Main js -->
  <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>

  @endpush

</x-app-layout>