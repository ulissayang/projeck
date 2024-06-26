<x-app-layout>
  @slot('title', 'Show Guru')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Show : {{ $guru->title }}</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Informasi</li>
          <li class="breadcrumb-item active">{{ $guru->title }}</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body overflow-x-auto">
              <div class="card-title">
                <x-button as="a" href="{{ route('guru.index') }}" class="btn-sm">
                  <i class="bi bi-arrow-left-circle"></i> Kembali
                </x-button>
              </div>

              <!-- Table with stripped rows -->
              <table class="table table-striped table-responsive table-hover">
                <tr>
                  <th>Nama</th>
                  <td>:</td>
                  <td>{{ $guru->nama }}</td>
                </tr>
                <tr>
                  <th>Jabatan</th>
                  <td>:</td>
                  <td>{{ $guru->jabatan }}</td>
                </tr>
                <tr>
                  <th>Foto</th>
                  <td>:</td>
                  <td>
                    @if ($guru->foto)
                    <img src="{{ asset('storage/'. $guru->foto) }}" alt="" class="img-fluid col-sm-2">
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