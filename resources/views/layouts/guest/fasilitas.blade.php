<x-app-layout title="Fasilitas">
  <main id="main">

    {{-- start heading --}}
    <x-guest.heading title="Fasilitas" content="Sekolah Dasar Negeri 260 Maluku Tengah" />
    {{-- End heading --}}

    <section class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">
          <!-- ======= Content Section ======= -->
          <div class="col-lg-8">
            <div class="row gy-4">
              <p>
                You can duplicate this sample page and create any number of inner pages you like!
              </p>
            </div>
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
</x-app-layout>