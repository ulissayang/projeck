{{--
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
    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi"
      value="{{ old('deskripsi', $prestasi->deskripsi) }}">
    @error('deskripsi')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>

  <div class="mb-3">
    <label class="form-label" for="date">Date</label>
    <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date"
      value="{{ old('date', $prestasi->date) }}">
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
<!-- End Form update data kegiatan --> --}}

<div class="modal fade" id="dataModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="ms-auto">
        <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <h1 class="modal-title fs-5 text-center fw-bold" id="staticBackdropLabel"></h1>
      <div class="modal-body">
        <!-- Form update data  -->
        <form id="modalForm">
          @csrf
          <input type="hidden" name="slug" id="slug">
          <input type="hidden" name="oldImage" value="">

          <div class="mb-3">
            <label for="title" class="form-label">Title<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required
              autofocus>
          </div>

          <div class="mb-3">
            <label class="form-label" for="description">Description<span class="text-danger">*</span></label>
            <textarea class="form-control description" id="summernote" name="description" rows="5"
              value="{{ old('description') }}">{{ old('description') }}</textarea>
          </div>


          <div class="mb-3">
            <label for="date" class="form-label">Date<span class="text-danger">*</span></label>
            <input type="date" class="form-control" id="date" name="date" value="{{ old('date') }}" required>
          </div>


          <div class="mb-3">
            <label for="image" class="form-label">Image</label>

            <img id="image-preview" class="img-preview img-fluid col-sm-2 py-2 d-block" style="display: none;">

            <input type="file" class="form-control" name="image" id="image" accept="image/*" onchange="previewImage()">
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