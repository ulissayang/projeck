<x-guest.app-layout title="Prestasi">
    <style>
        .card-img-top {
            max-height: 700px;
            object-fit: cover;
            overflow: hidden;
        }

        .badge-prestasi {
            background-color: #008374;
            color: #fff;
            font-size: 0.7rem;
            position: absolute;
            top: 0;
            left: 0;
            padding: 7px 12px;
            border-radius: 0 0 10px 0;
            /* Membuat sisi kiri badge persegi dan sisi kanan membulat */
        }

        .card-title {
            font-weight: bold;
            color: #003399;
        }

        .deskripsi-prestasi {
            font-size: 1rem;
            line-height: 1.5;
            text-align: justify;

        }

        .deskripsi-prestasi::first-letter {
            font-size: 2rem;
            font-weight: bold;
            float: left;
            margin-right: 10px;
            line-height: 1;
        }
    </style>
    <main id="main">

        {{-- start heading --}}
        <x-guest.heading title="Prestasi" link="{{ url('/prestasi-ak') }}" linkText="Prestasi"
            content="{{ $prestasi->title }}" show="{{ $prestasi->title }}" />
        {{-- End heading --}}

        <section class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row g-5">
                    <!-- ======= Content Section ======= -->
                    <div class="col-lg-8">
                        @if ($prestasi->image != null)
                        <img src="{{ asset('storage/' . $prestasi->image) }}" alt="{{ $prestasi->title }}"
                            class="card-img-top rounded-3" loading="lazy">
                        @else
                        <img src="{{ asset('guest/assets/img/prestasi-bg.svg') }}" alt="{{ $prestasi->title }}"
                            class="card-img-top rounded-3" loading="lazy">
                        @endif

                        <div class="card-body">
                            <p class="py-4 deskripsi-prestasi">{!! $prestasi->description !!}</p>
                            <div class="row">
                                <div class="col-md-4">
                                    <strong><i class="text-warning me-2 bi bi-person"></i>Nama</strong>
                                    <p class="small ms-4">{{ $prestasi->nama }}</p>
                                </div>
                                <div class="pb-3 col-md-4">
                                    <strong><i class="text-warning me-2 bi bi-calendar2-check"></i>Tanggal</strong>
                                    <p class="small ms-4">{{ \Carbon\Carbon::parse($prestasi->date)->isoFormat('D MMMM
                                        YYYY') }}</p>
                                </div>
                                <div class="pb-3 col-md-4">
                                    <strong><i class="text-warning me-2 bi bi-award"></i>Prestasi</strong>
                                    <p class="small ms-4">{{ ($prestasi->jenis) }}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- sidebar start --}}
                    <div class="col-lg-4">
                        <x-guest.sidebar />
                    </div>
                    {{-- sidebar end --}}
                </div>

            </div>
        </section>

    </main><!-- End #main -->
</x-guest.app-layout>