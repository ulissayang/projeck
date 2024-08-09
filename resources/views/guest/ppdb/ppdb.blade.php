<x-guest.app-layout title="PPDB">
    @push('link')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    @endpush
    <main id="main">
        {{-- start heading --}}
        <x-guest.heading title="PPDB" linkText="PPDB" content="Sekolah Dasar Negeri 260 Maluku Tengah" />
        {{-- End heading --}}

        <section class="blog kegiatan">
            <div class="container" data-aos="fade-up">
                <div class="row g-5">

                    <!-- ======= Content Section ======= -->
                    <div class="col-lg-12">
                        <article class="article-bg pb-5 overflow-hidden">
                            <div class="kegiatan-show">
                                <div class="image text-center">
                                    <a href="{{ asset('storage/' . $ppdb->image)  }}" data-fancybox="ppdb"
                                        data-caption="{{ $ppdb->name }}">
                                        <img src="{{ asset('storage/' . $ppdb->image) }}" class="ppdb-photo card-img"
                                            alt="{{ $ppdb->name }}" loading="lazy">
                                    </a>
                                </div>

                                <div class="card-body px-4">
                                    <div class="pt-2 mt-2">
                                        <span class="small text-muted me-4"><i
                                                class="icons bi bi-person-circle me-2"></i>Oleh : {{
                                            $ppdb->user->name
                                            }}</span>
                                        <span class=" text-muted small"><i
                                                class="icons me-2 bi bi-calendar-check"></i>Tanggal
                                            Posting
                                            :
                                            {{ (new \Carbon\Carbon($ppdb->updated_at))->format('d F Y')
                                            }}</span>
                                    </div>
                                    <div class="pt-3 border-bottom border-1 border-black">
                                        <h2 class="fw-semibold pt-3">{{ $ppdb->name }}</h2>
                                    </div>
                                    <p class="mt-2 deskripsi-kegiatan">{!! $ppdb->deskripsi !!}</p>

                                </div>
                            </div>
                        </article>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
    @push('script')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    @endpush
</x-guest.app-layout>