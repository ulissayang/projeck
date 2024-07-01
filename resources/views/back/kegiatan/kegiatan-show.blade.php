<x-app-layout>
  @slot('title', 'Show Kegiatan')
  <main id="main" class="main">

    <x-back.breadcrumb :title="$title" :breadcrumbs="$breadcrumbs" /><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <x-back.show-data :data="[
                          'title' => $kegiatan->title,
                        'description' => $kegiatan->description,
                        'author' => $kegiatan->user->name,
                        'location' => $kegiatan->location,
                        'image' => $kegiatan->image,
                        'date_time' => $kegiatan->date_time,
                        'created_at' => $kegiatan->created_at,
                        'updated_at' => $kegiatan->updated_at,
                    ]" :backRoute="route('kegiatan.index')" />
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