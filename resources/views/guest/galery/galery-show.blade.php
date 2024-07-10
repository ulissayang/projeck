<x-guest.app-layout title="Galery Foto Show">
    <style>
        .gallery-photo {
            width: 270px;
            height: 270px;
            object-fit: cover;
            margin-bottom: 1rem;
            border-radius: 5px;
        }

        .heading-with-lines {
            position: relative;
            padding-bottom: 2px;
            /* Adjust the padding as needed */
            text-align: center;
        }

        .heading-with-lines::before,
        .heading-with-lines::after {
            content: '';
            position: absolute;
            width: 60px;
            /* Adjust the width as needed */
            height: 2px;
            /* Adjust the height as needed */
            background-color: #ffc107;
            /* Adjust the color as needed */
        }

        .heading-with-lines::before {
            left: calc(50% - 70px);
            /* Position the first line to the left of the center */
            top: 100%;
            /* Position below the text */
            margin-top: 4px;
            /* Adjust the space between text and line */
        }

        .heading-with-lines::after {
            left: calc(50% + 10px);
            /* Position the second line to the right of the center */
            top: 100%;
            /* Position below the text */
            margin-top: 4px;
            /* Adjust the space between text and line */
        }
    </style>
    <main id="main">

        {{-- start heading --}}
        <x-guest.heading title="Galery Foto" link="{{ url('/galery-foto-sekolah') }}" linkText="Galery Foto"
            content="{{ $foto->judul }}" show="{{ $foto->judul }}" />
        {{-- End heading --}}

        <section class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row g-5">
                    <!-- ======= Content Section ======= -->
                    <div class="col-lg-8">
                        <div>
                            <h1 class="fw-bold fs-1 text-center heading-with-lines">{{ $foto->judul }}</h1>
                        </div>

                        <div class="card-body">
                            <p class="py-4 deskripsi-prestasi">{!! $foto->deskripsi !!}</p>
                            <div class="row ">
                                {{-- Tampilkan semua foto dari database yang berbentuk JSON --}}
                                @php
                                $images = json_decode($foto->image, true);
                                @endphp


                                @foreach ($images as $image)
                                <div class="col m-auto text-center">
                                    <img src="{{ asset('storage/' . $image) }}" alt="{{ $foto->judul }}"
                                        class="gallery-photo" loading="lazy">
                                </div>
                                @endforeach

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