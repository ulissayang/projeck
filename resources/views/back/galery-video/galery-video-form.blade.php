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
                <x-button as="a" href="{{ route('galery-video.index') }}" class="btn-sm">
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
                    value="{{ old('judul', $galery_video->judul) }}">
                  @error('judul')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label" for="deskripsi">Deskripsi</label>
                  <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi"
                    name="deskripsi" rows="5">{{ old('deskripsi', $galery_video->deskripsi) }}</textarea>

                  @error('deskripsi')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label" for="video_url">Video Url</label>
                  <input type="text" class="form-control @error('video_url') is-invalid @enderror" id="video_url"
                    name="video_url" value="{{ old('video_url', $galery_video->video_url) }}">

                  @error('video_url')
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
  <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

  <script>
    CKEDITOR.replace( 'deskripsi' );
    // image preview
  </script>



</x-app-layout>