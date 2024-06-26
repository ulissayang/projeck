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
                <x-button as="a" href="{{ route('pengumuman.index') }}" class="btn-sm">
                  <i class="bi bi-arrow-left-circle"></i> Kembali
                </x-button>
              </div>

              <!-- Form update data kegiatan -->
              <form action="{{ $route }}" method="post" enctype="multipart/form-data">
                @method($method)
                @csrf
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title', $pengumuman->title) }}">
                  @error('title')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label" for="body">Body</label>
                  <textarea class="form-control @error('body') is-invalid @enderror" id="body" name="body"
                    rows="5">{{ old('body', $pengumuman->body) }}</textarea>

                  @error('body')
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
    CKEDITOR.replace( 'body' );
    // image preview
  </script>



</x-app-layout>