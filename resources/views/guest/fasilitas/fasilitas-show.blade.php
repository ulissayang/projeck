<x-guest.app-layout title="{{ $fasilitas->nama }}">
    <style>
        .card-img-top {
            max-height: 700px;
            object-fit: cover;
            overflow: hidden;
        }

        .badge-fasilitas {
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

        .deskripsi-fasilitas {
            font-size: 1rem;
            line-height: 1.5;
            text-align: justify;

        }

        .deskripsi-fasilitas::first-letter {
            font-size: 2rem;
            font-weight: bold;
            float: left;
            margin-right: 10px;
            line-height: 1;
        }
    </style>
    <main id="main">

        {{-- start heading --}}
        <x-guest.heading title="Fasilitas" linkText="Fasilitas" link="{{ url('/fasilitas-sekolah') }}" content="{{ $fasilitas->nama }}" show="{{ $fasilitas->nama }}" />
        {{-- End heading --}}

        <section class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row g-5">
                    <!-- ======= Content Section ======= -->
                    <div class="col-lg-8">

                        <img src="{{ asset('storage/'. $fasilitas->image) }}" class="card-img-top rounded-3"
                            alt="Fasilitas">
                        <div class="card-body">
                            <p class="py-4 deskripsi-fasilitas">{!! $fasilitas->deskripsi !!}</p>
                            <div class="d-flex float-start">
                                <span class=" text-muted small me-3"><i class="bi bi-person"></i>
                                    {{ $fasilitas->user->name }}</span>
                                <span class=" text-muted small"><i class="bi bi-pencil"></i>
                                    {{ (new \Carbon\Carbon($fasilitas->updated_at))->format('d F, Y') }}</span>
                            </div>
                            <span class="float-end badge rounded-pill text-bg-secondary"><i
                                    class="bi bi-bookmark-check"></i> {{ $fasilitas->keterangan }}</span>
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