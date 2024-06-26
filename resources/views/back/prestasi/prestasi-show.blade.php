<x-app-layout>
  @slot('title', 'Show Prestasi')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Show : {{ $prestasi->title }}</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item">Informasi</li>
          <li class="breadcrumb-item active">{{ $prestasi->title }}</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body overflow-x-auto">
              <div class="card-title">
                <x-button as="a" href="{{ route('prestasi.index') }}" class="btn-sm">
                  <i class="bi bi-arrow-left-circle"></i> Kembali
                </x-button>
              </div>

              <!-- Table with stripped rows -->
              <table class="table table-striped table-responsive table-hover">
                <tr>
                  <th>Nama</th>
                  <td>:</td>
                  <td>{{ $prestasi->nama }}</td>
                </tr>
                <tr>
                  <th>Deskripsi</th>
                  <td>:</td>
                  <td>{{ $prestasi->deskripsi }}</td>
                </tr>
                <tr>
                  <th>Date</th>
                  <td>:</td>
                  <td>{{ $prestasi->date }}</td>
                </tr>
                <tr>
                  <th>Foto</th>
                  <td>:</td>
                  <td>
                    @if ($prestasi->foto)
                    <img src="{{ asset('storage/'. $prestasi->foto) }}" alt="" class="img-fluid col-sm-2">
                    @else
                    Tidak ada foto
                    @endif
                  </td>
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