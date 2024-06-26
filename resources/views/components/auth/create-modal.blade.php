<!-- Modal -->
<div class="modal fade" id="modalCreate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h1 class="modal-title m-auto fs-5 fw-bold text-white" id="staticBackdropLabel">Tambah Kegiatan</h1>
      </div>
      <div class="modal-body">
        <form action="{{ route('kegiatan.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
              value="{{ old('title') }}" required>
            @error('title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="mb-3 form-floating">
            <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Leave a comment here"
              id="description" name="description" required>{{ old('description') }}</textarea>
            <label for="description">Description</label>
            @error('description')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="date_time" class="form-label">Date & Time</label>
            <input type="datetime-local" class="form-control @error('date_time') is-invalid @enderror" id="date_time"
              name="date_time" value="{{ old('date_time') }}" required>
            @error('date_time')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control @error('location') is-invalid @enderror" id="location"
              name="location" value="{{ old('location') }}" required>
            @error('location')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <img class="img-preview img-fluid mb-3 col-sm-2">
            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image"
              onchange="previewImage()">
            @error('image')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="modal-footer">
            <x-button type="reset" class="btn btn-danger " data-bs-dismiss="modal">Keluar</x-button>
            <x-button>Simpan</x-button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>