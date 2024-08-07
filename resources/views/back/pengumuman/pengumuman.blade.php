<x-app-layout>
    @push('link')
    <link href="{{ asset('assets/vendor/summernote/dist/summernote-lite.css') }}" rel="stylesheet">
    <link href="DataTables/datatables.min.css" rel="stylesheet">
    @endpush
    @slot('title', 'Pengumuman')
    <main id="main" class="main">

        <x-back.breadcrumb :title="$title" :breadcrumbs="$breadcrumbs" /><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body overflow-x-auto">
                            <div class="card-title">
                                <x-button onclick="showModal()" class="btn-sm" title="Tambah Data">
                                    <i class="bi bi-patch-plus"></i> Tambah Data
                                </x-button>
                            </div>

                            <!-- Tombol Hapus Terpilih -->
                            <form id="bulk-delete-form" action="#" method="POST"
                                data-url="{{ route('pengumuman.bulk_delete') }}" style="display: none;">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" id="bulk-delete-ids" name="ids">
                                <x-button id="delete-selected" class="btn-sm btn-danger mb-3"><i
                                        class="bi bi-trash"></i>Hapus
                                    Terpilih
                                </x-button>
                            </form>

                            {{-- data tabel start --}}
                            {{ $dataTable->table(['class' => 'table table-striped table-hover', 'style' =>
                            'width:100%']) }}
                            {{-- data tabel end --}}

                        </div>
                    </div>

                </div>
            </div>

            @include('back.pengumuman.pengumuman-form')
        </section>


    </main><!-- End #main -->

    @push('scripts')

    <!-- Jquery 3 -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>

    <!-- Bootstrap 5 -->
    <script type="text/javascript" src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>

    <!-- Main js -->
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Laravel Javascript Validation -->
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\pengumumanRequest', '#modalForm') !!}

    <!-- Sweet Alert2 -->
    <script type="text/javascript" src="{{ asset('assets/vendor/sweetalert/sweetalert2.js') }}"></script>

    <!-- Summernote Editor -->
    <script type="text/javascript" src="{{ asset('assets/vendor/summernote/dist/summernote-lite.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/vendor/summernote/dist/lang/summernote-id-ID.min.js') }}">
    </script>

    <!-- Datatables -->
    <script type="text/javascript" src="{{ asset('DataTables/datatables.min.js') }}"> </script>

    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}

    <script>
        @if (session('success'))
            window.sessionStorage.setItem("successMessage", "{{ session('success') }}");
        @endif
        
        @if (session('error'))
            window.sessionStorage.setItem("errorMessage", "{{ session('error') }}");
            @endif

        var bulkDeleteUrl = "{{ route('pengumuman.bulk_delete') }}";

        let save_method;


     // Function to reset form and clear validation errors
     function resetForm() {
        $('#modalForm')[0].reset();
        $('#file').val(''); // Reset file input agar kosong
        $('#file-preview a').remove(); // Hapus tag a jika ada
        $('#summernote').summernote('code', '');           
        $('.is-invalid').removeClass('is-invalid'); 
        $('.is-valid').removeClass('is-valid'); 
        $('span.invalid-feedback').remove(); 
    }



    // Function to show modal for creating new data
    function showModal() {
        resetForm(); // Reset form and clear validation errors
        $('#dataModal').modal('show');
        save_method = 'create';

        $('.btnSubmit').text('Simpan');
        $('.modal-title').text('Tambah Data');
    }

    // Function to handle form submission for store & update data
    $('#modalForm').on('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);
        let url, method;
        url = 'pengumuman';
        method = 'POST';

        if (save_method === 'update') {
            url = 'pengumuman/' + $('#slug').val();
            formData.append('_method', 'PUT');
        }

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: method,
            url: url,
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                $('#dataModal').modal('hide');
                $('.table').DataTable().ajax.reload();
                Swal.fire({
                    icon: "success",
                    title: "Sukses",
                    text: response.message,
                    showConfirmButton: false,
                    timer: 2000,
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
                Swal.fire({
                    icon: "info",
                    title: "Peringatan!",
                    text: jqXHR.responseJSON.message || jqXHR.responseText,
                    showConfirmButton: false,
                    timer: 3000,
                });
            }
        });
    });

    // Function to show edit modal and load data
    function confirmEdit(e) {
    resetForm(); // Reset form and clear validation errors

    let slug = e.getAttribute('data-slug');
    save_method = 'update';

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "GET",
        url: '{{ route("pengumuman.edit", ":slug") }}'.replace(':slug', slug),
        success: function(response) {
            let result = response.data;
            $('#title').val(result.title);
            $('#summernote').summernote('code', result.body); // Set Summernote content
            $('#slug').val(result.slug);

           // Tampilkan file yang ada
            if (result.file) {
                let fileName = result.file.split('/').pop(); // Mengambil nama file dari path
                $('#file-preview').html(`<a href="/storage/file-pengumuman/${fileName}" target="_blank">${fileName}</a>`).show(); // Tampilkan nama file sebagai tautan
                $('input[name="oldFile"]').val(result.file);
            } else {
                $('#file-preview').hide();
            }


            $('#dataModal').modal('show'); // Show modal after data is loaded
            $('.btnSubmit').text('Simpan');
            $('.modal-title').text('Ubah Data');
        },
        error: function(jqXHR, textStatus, errorThrown) {
            Swal.fire({
                icon: "info",
                title: "Peringatan!",
                text: jqXHR.responseJSON.message || jqXHR.responseText,
                showConfirmButton: false,
                timer: 3000,
            });
        }
    });
}


    // Function to confirm delete action
    function confirmDelete(e) {
        let slug = e.getAttribute('data-slug');

        Swal.fire({
            title: "Apakah Anda yakin?",
            text: "Data yang dihapus tidak bisa dikembalikan!",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Ya, hapus!",
            cancelButtonText: "Batal",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "DELETE",
                    url: '{{ route("pengumuman.destroy", ":slug") }}'.replace(':slug', slug),
                    dataType: 'json',
                    success: function(response) {
                        $('#dataModal').modal('hide');
                        $('.table').DataTable().ajax.reload();
                        Swal.fire({
                            icon: "success",
                            title: "Sukses",
                            text: response.message,
                            showConfirmButton: false,
                            timer: 2000,
                        });
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        Swal.fire({
                            icon: "info",
                            title: "Peringatan!",
                            text: jqXHR.responseJSON.message || jqXHR.responseText,
                            showConfirmButton: false,
                            timer: 3000,
                        });
                    }
                });
            }
        });
    }
    </script>
    @endpush
</x-app-layout>