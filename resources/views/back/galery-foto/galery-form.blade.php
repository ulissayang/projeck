<x-app-layout>
  @slot('title', $title)
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>{{ $title }}</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Galery</li>
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
                <x-button as="a" href="{{ route('galery-foto.index') }}" class="btn-sm">
                  <i class="bi bi-arrow-left-circle"></i> Kembali
                </x-button>
              </div>

              <!-- Form update data kegiatan -->
              <form action="{{ $route }}" method="post" enctype="multipart/form-data">
                @method($method)
                @csrf
                <div class="mb-3">
                  <label for="judul" class="form-label">Judul</label>
                  <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul"
                    value="{{ old('judul', $galery_foto->judul) }}">

                  @error('judul')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror

                </div>

                <div class="mb-3">
                  <label class="form-label" for="deskripsi">Deskripsi</label>
                  <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi"
                    name="deskripsi" value="{{ old('deskripsi', $galery_foto->deskripsi) }}">
                  @error('deskripsi')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="foto" class="form-label">Foto</label>
                  <input type="hidden" name="oldImage" value="{{ json_encode($galery_foto->foto) }}">

                  <div id="image-preview-container" class="d-flex flex-wrap">
                    @if ($galery_foto->foto)

                    @if (is_string($galery_foto->foto))
                    @php
                    $foto = json_decode($galery_foto->foto, true);
                    @endphp
                    @foreach ($foto as $image)
                    <img src="{{ asset('storage/' . $image) }}"
                      class="img-preview p-2 rounded-4 img-fluid col-sm-2 d-block mb-2">
                    @endforeach
                    @else

                    @foreach ($galery_foto->foto as $foto)
                    <img src="{{ asset('storage/' . $foto) }}"
                      class="img-preview p-2 rounded-4 img-fluid col-sm-2 d-block mb-2">
                    @endforeach

                    @endif
                    @else
                    <img class="img-preview rounded-4 img-fluid col-sm-2">
                    @endif
                  </div>

                  <input type="file" class="form-control mt-3 @error('foto') is-invalid @enderror" name="foto[]"
                    id="foto" onchange="previewImage()" multiple>

                  @error('foto')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>


                <div class="mb-3 float-end">
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
    // foto preview
function previewImage() {
    const foto = document.querySelector("#foto");
    const previewContainer = document.querySelector("#image-preview-container");
    previewContainer.innerHTML = ''; // Clear existing previews

    if (foto.files) {
        Array.from(foto.files).forEach(file => {
            const oFReader = new FileReader();
            oFReader.readAsDataURL(file);

            oFReader.onload = function (oFREvent) {
                const img = document.createElement('img');
                img.src = oFREvent.target.result;
                img.className = 'img-fluid col-sm-1 p-2 d-block mb-2 rounded-circle';
                previewContainer.appendChild(img);
            };
        });
    } else {
        const img = document.createElement('img');
        img.className = 'img-fluid col-sm-1 d-block p-2 mb-2 rounded-circle';
        previewContainer.appendChild(img);
    }
}
  </script>
</x-app-layout>