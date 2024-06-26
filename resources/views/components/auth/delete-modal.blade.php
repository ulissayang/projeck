<!-- Modal -->
@foreach ( $activities as $activitie )
<div class="modal fade" id="modalDelete{{ $activitie->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
  tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h1 class="modal-title m-auto fs-5 fw-bold text-white" id="staticBackdropLabel">Delete Kegiatan</h1>
      </div>
      <div class="modal-body">
        <form action="{{ url('kegiatan/'. $activitie->id) }}" method="post">
          @method('DELETE')
          @csrf
          <div class="mb-3">
            <p>Yakin ingin menghapus data ini ? </p>
          </div>

          <div class="modal-footer">
            <x-button type="button" class="btn btn-danger " data-bs-dismiss="modal">Keluar</x-button>
            <x-button>Delete</x-button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endforeach