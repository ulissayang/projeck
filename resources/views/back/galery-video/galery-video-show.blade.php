<x-app-layout>
  @slot('title', 'Show Galery Video')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Show : {{ $galery_video->judul }}</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Informasi</li>
          <li class="breadcrumb-item active">{{ $galery_video->judul }}</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body overflow-x-auto">
              <div class="card-title">
                <x-button as="a" href="{{ route('galery-video.index') }}" class="btn-sm">
                  <i class="bi bi-arrow-left-circle"></i> Kembali
                </x-button>
              </div>

              <!-- Table with stripped rows -->
              <table class="table table-striped table-responsive table-hover">
                <tr>
                  <th>Judul</th>
                  <td>:</td>
                  <td>{{ $galery_video->judul }}</td>
                </tr>
                <tr>
                <tr>
                  <th>Video Url</th>
                  <td>:</td>
                  <td>{{ $galery_video->video_url }}</td>
                </tr>
                <tr>
                  <th>Deskripsi</th>
                  <td>:</td>
                  <td>{!! $galery_video->deskripsi !!}</td>
                </tr>
                <tr>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
</x-app-layout>