{{-- <x-app-layout>
  @push('link')
  <link href="{{ asset('assets/vendor/summernote/dist/summernote-lite.css') }}" rel="stylesheet">
  @endpush
  @slot('title', $title )
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
                <x-button as="a" href="{{ route('agenda.index') }}" class="btn-sm">
                  <i class="bi bi-arrow-left-circle"></i> Kembali
                </x-button>
              </div>

              <!-- Form update data kegiatan -->
              <form action="{{ $route }}" method="post" enctype="multipart/form-data" id="agendaForm">
                @method($method)
                @csrf
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="title" name="title"
                    value="{{ old('title', $agenda->title) }}" required autofocus>
                </div>

                <div class="mb-3">
                  <label class="form-label" for="description">Description</label>
                  <textarea class="form-control" id="summernote" name="description" rows="5"
                    required>{{ old('description', $agenda->description) }}</textarea>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="date_time" class="form-label">Date & Time</label>
                      <input type="datetime-local" class="form-control" id="date_time" name="date_time"
                        value="{{ old('date_time', $agenda->date_time) }}" required>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="location" class="form-label">Location</label>
                      <input type="text" class="form-control" id="location" name="location"
                        value="{{ old('location', $agenda->location) }}" required>
                    </div>
                  </div>
                </div>

                <div class="mb-3">
                  <label for="image" class="form-label">Image</label>
                  <input type="hidden" name="oldImage" value="{{ $agenda->image }}">

                  @if ($agenda->image)
                  <img src="{{ asset('storage/' . $agenda->image) }}" class="img-preview img-fluid col-sm-2 d-block">
                  @else
                  <img class="img-preview img-fluid col-sm-2">
                  @endif
                  <input type="file" class="form-control mt-3" name="image" id="image" accept="image/*"
                    onchange="previewImage()">
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

  @push('scripts')

  <!-- Jquery 3 -->
  <script type="text/javascript" src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>

  <!-- Bootstrap 5 -->
  <script type="text/javascript" src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>

  <!-- Main js -->
  <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>

  <!-- Sweet Alert2 -->
  <script type="text/javascript" src="{{ asset('assets/vendor/sweetalert/sweetalert2.js') }}"></script>

  <!-- Laravel Javascript Validation -->
  <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

  {!! JsValidator::formRequest('App\Http\Requests\AgendaRequest', '#agendaForm') !!}

  <!-- Summernote Editor -->
  <script type="text/javascript" src="{{ asset('assets/vendor/summernote/dist/summernote-lite.js') }}"></script>

  <script type="text/javascript" src="{{ asset('assets/vendor/summernote/dist/lang/summernote-id-ID.min.js') }}">
  </script>

  <script>
    @if (session('error'))
            window.sessionStorage.setItem("errorMessage", "{{ session('error') }}");
            @endif
    // CKEDITOR.replace( 'description' );
  </script>
  @endpush

</x-app-layout> --}}

<div class="modal fade" id="dataModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="ms-auto">
        <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <h1 class="modal-title fs-5 text-center fw-bold" id="staticBackdropLabel"></h1>
      <div class="modal-body">
        <!-- Form update data -->
        <form id="modalForm">
          @csrf
          <input type="hidden" name="slug" id="slug">

          <div class="mb-3">
            <label for="title" class="form-label">Agenda<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required
              autofocus>
          </div>

          <div class="mb-3">
            <label class="form-label" for="description">Deskripsi<span class="text-danger">*</span></label>
            <textarea class="form-control description" id="summernote" name="description" rows="5"
              value="{{ old('description') }}">{{ old('description') }}</textarea>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="date_time" class="form-label">Waktu & Tanggal<span class="text-danger">*</span></label>
                <input type="datetime-local" class="form-control" id="date_time" name="date_time"
                  value="{{ old('date_time') }}" required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="mb-3">
                <label for="location" class="form-label">Lokasi<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="location" name="location" value="{{ old('location') }}"
                  required>
              </div>
            </div>
          </div>

          <div class="float-end">
            <div class="m-3">
              <x-button type="button" class="btn-secondary" data-bs-dismiss="modal">Keluar</x-button>
              <x-button class="btnSubmit"></x-button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>