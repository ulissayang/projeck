<x-guest.app-layout title="prestasi">
    <main id="main">

        {{-- start heading --}}
        <x-guest.heading title="Prestasi" linkText="Prestasi" content="Sekolah Dasar Negeri 260 Maluku Tengah" />
        {{-- End heading --}}

        <section class="blog services">
            <div class="container" data-aos="fade-up">

                <div class="row g-5">

                    <!-- ======= Content Section ======= -->
                    <div class="col-lg-8">
                        <div class="row gy-4">

                            {{-- prestasi terbaru --}}
                            @if ($prestasi->count() == 0)
                            <img src="{{ asset('assets/img/not-data.png') }}" class="img-fluid m-auto"
                                style="max-width: 40%" alt="no data">
                            @else
                            @foreach ($prestasi as $data)
                            <div class="col-md-6">
                                <div class="service-item position-relative">
                                    <div class="image position-relative">
                                        {{-- kalau ada image --}}
                                        @if ($data->image != null)
                                        <img src="{{ asset('storage/' . $data->image) }}" alt="{{ $data->title }}"
                                            class="card-img" loading="lazy">
                                        @else
                                        <img src="{{ asset('guest/assets/img/prestasi-bg.svg') }}"
                                            alt="{{ $data->title }}" class="card-img" loading="lazy">
                                        @endif
                                    </div>
                                    <div class="content">
                                        <h3>{{ $data->title }}</h3>
                                        <p>{{ $data->description }}</p>
                                        <a href="{{ route('prestasi-ak-show', $data->slug) }}"
                                            class="readmore stretched-link">Baca
                                            Selengkapnya <i class="bi bi-arrow-right"></i></a>
                                        <span class="text-muted small d-block mt-2 py-2 border-top"><i
                                                class="text-warning bi bi-person-fill"></i> {{
                                            $data->user->name
                                            }}</span>
                                    </div>
                                </div>

                            </div>
                            @endforeach
                            @endif

                            {{-- <div class=" col-md-6">
                                <article>

                                    <div class="post-img">
                                        <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                                    </div>

                                    <p class="post-category">Politics</p>

                                    <h2 class="title">
                                        <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
                                    </h2>

                                    <div class="d-flex align-items-center">
                                        <img src="assets/img/blog/blog-author.jpg" alt=""
                                            class="img-fluid post-author-img flex-shrink-0">
                                        <div class="post-meta">
                                            <p class="post-author-list">Maria Doe</p>
                                            <p class="post-date">
                                                <time datetime="2022-01-01">Jan 1, 2022</time>
                                            </p>
                                        </div>
                                    </div>

                                </article>
                            </div><!-- End post list item --> --}}
                        </div>
                        <div class="float-end">

                            {{ $prestasi->links() }}

                        </div><!-- End pagination -->
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