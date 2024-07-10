<!-- resources/views/components/guest/modal.blade.php -->
@props(['title', 'dateTime' => null, 'description', 'location' => null, 'type', 'id'])

<div class="modal fade" id="modal{{ $type . $id }}" tabindex="-1" aria-labelledby="modalLabel{{ $type . $id }}"
    aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content p-4">
            <div class="m-auto">
                <h1 class="modal-title fs-5 fw-bold text-success" id="modalLabel{{ $type . $id }}">{{ $title }}</h1>
            </div>
            <div class="modal-body">
                @if ($type === 'agenda')
                <div class="row">
                    <div class="col">
                        <strong><i class="text-warning me-2 bi bi-clock"></i>Waktu</strong>
                        <p class="small ms-4">{{ \Carbon\Carbon::parse($dateTime)->format('H:i') }} WIT - Selesai</p>
                    </div>
                    <div class="pb-3 col">
                        <strong><i class="text-warning me-2 bi bi-calendar2-check"></i>Tanggal</strong>
                        <p class="small ms-4">{{ \Carbon\Carbon::parse($dateTime)->isoFormat('dddd, D MMMM YYYY') }}</p>
                    </div>
                </div>
                <span class="small text-muted"><i class="text-primary bi bi-exclamation-circle"></i> Detail
                    agenda</span>
                <p class="py-2 text-muted small text-secondary">{!! $description !!}</p>
                <i class="text-warning bi bi-geo-alt me-2"></i><strong>Tempat Pelaksanaan</strong>
                <p class="ms-4">{{ $location }}</p>
                @elseif ($type === 'announcement')
                <span class="pb-3 d-block"><i class="text-warning bi bi-calendar2-check"></i> {{ \Carbon\Carbon::parse($dateTime)->isoFormat('dddd, D MMMM YYYY') }}</span>
                <span class="small text-muted d-block"><i class="text-primary bi bi-exclamation-circle"></i> Detail
                    Pengumuman</span>
                <p class="text-muted small text-secondary">{!! $description !!}</p>
                @endif
            </div>
            <div class="m-auto">
                <button type="button" class="btn border-primary text-primary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>