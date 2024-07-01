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
            <label for="nama" class="form-label">Nama<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" required autofocus>
          </div>

          <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ old('jabatan') }}" required>
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