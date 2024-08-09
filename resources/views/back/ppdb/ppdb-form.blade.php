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
            <label for="name" class="form-label">Judul<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
          </div>

          <div class="mb-3">
            <label class="form-label" for="deskripsi">Deskripsi<span class="text-danger">*</span></label>
            <textarea class="form-control deskripsi" id="summernote" name="deskripsi" rows="5"
              value="{{ old('deskripsi') }}">{{ old('deskripsi') }}</textarea>
          </div>

          <div class="mb-3">
            <label for="image" class="form-label">Foto<span class="text-danger">*</span></label>

            <img id="image-preview" class="img-preview img-fluid col-sm-2 py-2 d-block" loading="lazy"
              style="display: none;">

            <input type="file" class="form-control" name="image" id="image" accept="image/*" onchange="previewImage()">
            <span class="text-muted small ms-2">Ukuran file maksimal 5 MB</span>
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