<x-guest.app-layout title="Kegiatan">
    <main id="main">

        {{-- start heading --}}
        <x-guest.heading title="Kegiatan" linkText="Kegiatan" content="{{ $kegiatan->title }}" link="{{ url('/kegiatan-sekolah') }}" show="{{ $kegiatan->title }}" />
        {{-- End heading --}}

        <section class="blog services">
            <div class="container" data-aos="fade-up">

                <div class="row g-5">

                    <!-- ======= Content Section ======= -->
                    <div class="col-lg-8">
                        <div class="row gy-4">

                            {{-- Kegiatan terbaru --}}
                            <div class="col-md-12">
                                <div class="service-item ">
                                    <div class="image text-center">
                                        {{-- kalau ada image --}}
                                        @if ($kegiatan->image != null)
                                        <img src="{{ asset('storage/' . $kegiatan->image) }}" alt="Kegiatan"
                                            class="card-img">
                                        @else
                                        <img src="{{ asset('guest/assets/img/keg-sekolah.svg') }}"
                                            alt="Kegiatan Sekolah">
                                        @endif
                                    </div>

                                    <div class="content">
                                        <div class="d-flex float-end">
                                            <span class=" text-muted small me-3"><i class="text-warning bi bi-geo-alt"></i> {{
                                                $kegiatan->location }}</span>
                                            <span class=" text-muted small"><i class="text-warning bi bi-calendar2-event-fill"></i>
                                                {{ (new \Carbon\Carbon($kegiatan->date_time))->format('d F, Y')
                                                }}</span>
                                        </div>

                                        <p class="py-4 mt-2">{!! $kegiatan->description !!}</p>

                                        <span class="small text-muted border-top py-2 d-block"><i
                                                class="text-warning bi bi-person"></i> {{ $kegiatan->user->name }}</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- end content section --}}

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