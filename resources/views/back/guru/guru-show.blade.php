<x-app-layout>
  @slot('title', 'Show Guru')
  <main id="main" class="main">

    <x-back.breadcrumb :title="$title" :breadcrumbs="$breadcrumbs" /><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <x-back.show-data :data="[
                        'nama' => $guru->nama,
                        'jabatan' => $guru->jabatan,
                        'author' => $guru->user->name,
                        'image' => $guru->image,
                        'created_at' => $guru->created_at,
                        'updated_at' => $guru->updated_at,
                    ]" :backRoute="route('guru.index')" />
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