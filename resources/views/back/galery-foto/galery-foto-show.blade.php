<x-app-layout>
  @slot('title', 'Show Galery Foto')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Show : Galery Foto</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item">Informasi</li>
          <li class="breadcrumb-item active">Galery Foto</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body overflow-x-auto">
              <div class="card-title">
                <x-button as="a" href="{{ route('galery-foto.index') }}" class="btn-sm">
                  <i class="bi bi-arrow-left-circle"></i> Kembali
                </x-button>
              </div>

              <!-- Table with stripped rows -->
              <table class="table table-striped table-responsive table-hover">
                <tr>
                  <th>Judul</th>
                  <td>:</td>
                  <td>{{ $galery_foto->judul }}</td>
                </tr>
                <tr>
                  <th>Deskripsi</th>
                  <td>:</td>
                  <td>{{ $galery_foto->deskripsi }}</td>
                </tr>
                <tr>
                  <th>Foto</th>
                  <td>:</td>
                  <td>
                    @if ($galery_foto->foto)
                    @php
                    $fotos = is_string($galery_foto->foto) ? json_decode($galery_foto->foto) : $galery_foto->foto;
                    @endphp
                    @if (is_array($fotos))
                    <div class="d-flex flex-wrap">
                      @foreach ($fotos as $foto)
                      <img src="{{ asset('storage/' . $foto) }}" alt="" class="img-fluid m-2 col-sm-2 rounded-4">
                      @endforeach
                    </div>
                    @else
                    <img src="{{ asset('storage/' . $galery_foto->foto) }}" alt=""
                      class="img-fluid m-2 col-sm-2 rounded-4">
                    @endif
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