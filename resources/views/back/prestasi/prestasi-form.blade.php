<x-app-layout>
  @slot('title', $title)
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>{{ $title }}</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Informasi</li>
          <li class="breadcrumb-item active">{{ $name }}</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body ">
              <div class="card-title">
                <x-button as="a" href="{{ route('prestasi.index') }}" class="btn-sm">
                  <i class="bi bi-arrow-left-circle"></i> Kembali
                </x-button>
              </div>

              <!-- Form update data kegiatan -->
              <form action="{{ $route }}" method="post" enctype="multipart/form-data">
                @method($method)
                @csrf
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                    value="{{ old('nama', $prestasi->nama) }}">

                  @error('nama')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror

                </div>

                <div class="mb-3">
                  <label class="form-label" for="deskripsi">Deskripsi</label>
                  <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi"
                    name="deskripsi" value="{{ old('deskripsi', $prestasi->deskripsi) }}">
                  @error('deskripsi')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label" for="date">Date</label>
                  <input type="date" class="form-control @error('date') is-invalid @enderror" id="date"
                    name="date" value="{{ old('date', $prestasi->date) }}">
                  @error('date')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="foto" class="form-label">Foto</label>
                  <input type="hidden" name="oldImage" value="{{ $prestasi->foto }}">

                  @if ($prestasi->foto)
                  <img src="{{ asset('storage/' . $prestasi->foto) }}" class="img-preview img-fluid col-sm-2 d-block">
                  @else
                  <img class="img-preview img-fluid col-sm-2">
                  @endif
                  <input type="file" class="form-control mt-3 @error('foto') is-invalid @enderror" name="foto" id="foto"
                    onchange="previewImage()">

                  @error('foto')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>


                <div class="mb-3 float-end">
                  <x-button class="btn-danger" type="reset">Reset</x-button>
                  <x-button>Simpan</x-button>
                </div>
              </form>
              <!-- End Form update data kegiatan -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <script>
    // image preview
function previewImage() {
    const image = document.querySelector("#foto");
    const imgPreview = document.querySelector(".img-preview");

    imgPreview.style.display = "block";

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function (oFREvent) {
        imgPreview.src = oFREvent.target.result;
    };
}
  </script>
</x-app-layout>