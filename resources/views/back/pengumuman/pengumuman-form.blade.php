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
            <label for="title" class="form-label">Pengumuman<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required
              autofocus>
          </div>

          <div class="mb-3">
            <label class="form-label" for="body">Deskripsi<span class="text-danger">*</span></label>
            <textarea class="form-control body" id="summernote" name="body" rows="5"
              value="{{ old('body') }}">{{ old('body') }}</textarea>
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