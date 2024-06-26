<!-- Modal -->
@props(['activities' => true])

@foreach ( $activities as $activitie )
<div class="modal fade" id="modalUpdate{{ $activitie->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
  tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h1 class="modal-title m-auto fs-5 fw-bold text-white" id="staticBackdropLabel">Tambah Kegiatan</h1>
      </div>
      <div class="modal-body">
        <form action="{{ url('kegiatan/'. $activitie->id) }}" method="post">
          @method('PUT')
 
          <div class="mb-3">
            <label for="name" class="form-label">Title</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
              value="{{ old('name', $activitie->name) }}">
            @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
              name="description" value="{{ old('description', $activitie->description) }}">
            @error('description')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="date-time" class="form-label">Date & Time</label>
            <input type="datetime-local" class="form-control @error('date-time') is-invalid @enderror" id="date-time"
              name="date_time" value="{{ old('date-time', $activitie->date_time) }}">
            @error('date-time')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control @error('location') is-invalid @enderror" id="location"
              name="location" value="{{ old('location', $activitie->location) }}">
            @error('location')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image">
            @error('image')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="modal-footer">
            <x-button type="button" class="btn btn-danger " data-bs-dismiss="modal">Keluar</x-button>
            <x-button>Simpan</x-button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endforeach