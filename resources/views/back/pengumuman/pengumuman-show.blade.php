{{-- <x-app-layout>
  @slot('title', 'Show Pengumuman')
  <main id="main" class="main">

    <x-auth.breadcrumb :title="$title" :breadcrumbs="$breadcrumbs" />

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body overflow-x-auto">
              <div class="card-title">
                <x-button as="a" href="{{ route('pengumuman.index') }}" class="btn-sm">
                  <i class="bi bi-arrow-left-circle"></i> Kembali
                </x-button>
              </div>

              <!-- Table with stripped rows -->
              <table class="table table-striped table-responsive table-hover">
                <tr>
                  <th>Title</th>
                  <td>:</td>
                  <td>{{ $pengumuman->title }}</td>
                </tr>
                <tr>
                  <th>Body</th>
                  <td>:</td>
                  <td>{!! $pengumuman->body !!}</td>
                </tr>
                <tr>
              </table>
              <!-- End Table with stripped rows -->

            </div>
            <div class="col px-3 py-2 bg-secondary-subtle">
              <div class="float-end text-secondary">
                <span>Updated at: {{ \Carbon\Carbon::parse($pengumuman->updated_at)->locale('id')->diffForHumans()
                  }},</span>
                <span>Created at: {{ \Carbon\Carbon::parse($pengumuman->created_at)->locale('id')->isoFormat('dddd, D
                  MMMM
                  YYYY ') }}</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
</x-app-layout> --}}

<x-app-layout>
  @slot('title', 'Show Pengumuman')
  <main id="main" class="main">

    <x-back.breadcrumb :title="$title" :breadcrumbs="$breadcrumbs" /><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <x-back.show-data :data="[
            'pengumuman' => $pengumuman->title,
            'deskripsi' => $pengumuman->body,
            'penulis' => $pengumuman->user->name,
            'created_at' => $pengumuman->created_at,
            'updated_at' => $pengumuman->updated_at,
            ]" :backRoute="route('pengumuman.index')" />
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