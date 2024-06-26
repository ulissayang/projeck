<x-app-layout>
  @slot('title', 'Fasilitas')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tabel Fasilitas</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Informasi</li>
          <li class="breadcrumb-item active">Fasilitas</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body ">
              <div class="card-title">
                <x-button as="a" :href="route('fasilitas.create')" class="btn-sm" title="Tambah Data">
                  <i class="bi bi-patch-plus"></i> Tambah Data
                </x-button>
              </div>

              {{-- alert success --}}
              @if (session('success'))
              <div class="my-3">
                <div class="alert alert-success fs-6 py-2">
                  <i class="bi bi-check-circle"></i> {{ session('success') }}
                </div>
              </div>
              @endif

              <!-- Table -->
              <table class="table table-striped datatable table-responsive table-hover ">
                <thead class="text-center">
                  <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $fasilitas as $data )
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->deskripsi }}</td>
                    <td>{{ $data->keterangan }}</td>

                    <td>
                      <x-button as="a" :href="route('fasilitas.show', $data->slug)" class="btn-sm btn-success"
                        title="Lihat"><i class="bi bi-eye"></i>
                      </x-button>
                      <x-button as="a" :href="route('fasilitas.edit', $data->slug)" class="btn-sm btn-warning"
                        title="Sunting"><i class="bi bi-pencil-square"></i>
                      </x-button>

                      {{-- form delete post --}}
                      <form action="{{ route('fasilitas.destroy', $data->id) }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn-sm btn btn-danger"
                          onclick="return confirm('Ada yakin ingin menghapus data ini ?')" title="Hapus"><i
                            class="bi bi-trash3"></i>
                        </button>
                      </form>

                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Table -->

            </div>
          </div>

        </div>
      </div>
    </section>


  </main><!-- End #main -->
</x-app-layout>