<x-app-layout>
  @slot('title', 'Show Kegiatan')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Show Kegiatan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Informasi</li>
          <li class="breadcrumb-item">Kegiatan</li>
          <li class="breadcrumb-item active">Show</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body overflow-x-auto">
              <div class="card-title">
                <x-button as="a" href="{{ route('kegiatan.index') }}" class="btn-sm">
                  <i class="bi bi-arrow-left-circle"></i> Kembali
                </x-button>
              </div>

              <!-- Table with stripped rows -->
              <table class="table table-striped table-responsive table-hover">
                <tr>
                  <th>Title</th>
                  <td>:</td>
                  <td>{{ $kegiatan->title }}</td>
                </tr>
                <tr>
                  <th>Description</th>
                  <td>:</td>
                  <td>{!! $kegiatan->description !!}</td>
                </tr>
                <tr>
                  <th>Author</th>
                  <td>:</td>
                  <td>{{ $kegiatan->user->name }}</td>
                </tr>
                <tr>
                  <th>Location</th>
                  <td>:</td>
                  <td>{{ $kegiatan->location }}</td>
                </tr>
                <tr>
                  <th>Image</th>
                  <td>:</td>
                  <td>
                    @if ($kegiatan->image)
                    <img src="{{ asset('storage/'. $kegiatan->image) }}" alt="" class="img-fluid col-sm-2">
                    @else
                    Tidak ada gambar
                    @endif
                  </td>
                </tr>
                <tr>
                  <th>Date & Time</th>
                  <td>:</td>
                  <td>{{ (new \Carbon\Carbon($kegiatan->date_time))->format('d F Y H:i') }} </td>
                </tr>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
</x-app-layout>