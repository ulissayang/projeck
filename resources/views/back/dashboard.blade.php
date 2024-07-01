<x-app-layout>
    @push('link')
    <link href="DataTables/datatables.min.css" rel="stylesheet">
    @endpush
    @slot('title', 'Dashboard')
    <main id="main" class="main">
        <div class="row justify-content-between align-items-center flex-wrap ">

            <x-back.breadcrumb :title="$title" :breadcrumbs="$breadcrumbs" />

        </div>

        <section class="section dashboard">
            <div class="row">

                <!-- header Card -->
                <div class="col-xl-12 ">

                    <div class="card info-card customers-card">

                        <div class="card-body">
                            {{-- Greating --}}
                            @php
                            $currentHour=now()->setTimezone('Asia/Jayapura')->hour;
                            @endphp

                            <div class="d-flex justyfy-content-center align-items-center">
                                <h5 class="card-title" id="greeting"></h5> &#124;
                                <span> {{ Auth::user()->name}}👋</span>
                            </div>


                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-building"></i>
                                </div>
                                <div class="ps-3">
                                    <h1 class="title-head">Portal Sekolah Dasar Negeri 260 Maluku Tengah
                                    </h1>
                                </div>
                            </div>

                        </div>
                    </div>

                </div><!-- End header Card -->

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- kagiatan Card -->
                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                            <div class="card info-card sales-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Kegiatan <span>| Today</span></h5>

                                    <div class="d-flex justify-content-around align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-clipboard-check"></i>
                                        </div>
                                        <div class="ps-3">
                                            <a href="{{ route('kegiatan.index') }}"
                                                class="text-primary small pt-1 fw-bold">
                                                <h6 class="text-center">
                                                    <h6 class="text-center">{{ \App\Models\Kegiatan::where('user_id',
                                                        auth()->user()->id)->count() }}</h6>
                                                </h6>
                                                Lihat Kegiatan
                                            </a>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End kegiatan Card -->

                        <!-- Prestasi Card -->
                        <div class="col-xxl-3 col-lg-4 col-sm-6">

                            <div class="card info-card customers-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Prestasi <span>| This Year</span></h5>

                                    <div class="d-flex justify-content-around align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-award"></i>
                                        </div>
                                        <div class="ps-3">
                                            <a href="{{ route('prestasi.index') }}"
                                                class="text-danger small pt-1 fw-bold">
                                                <h6 class="text-center">
                                                    <h6 class="text-center">{{ \App\Models\Prestasi::where('user_id',
                                                        auth()->user()->id)->count() }}</h6>
                                                </h6>
                                                Lihat Prestasi
                                            </a>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Prestasi Card -->

                        <!-- Agenda Card -->
                        <div class="col-xxl-3 col-lg-4 col-sm-6">
                            <div class="card info-card revenue-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Agenda <span>| This Month</span></h5>

                                    <div class="d-flex justify-content-around align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-calendar"></i>
                                        </div>
                                        <div class="ps-3">
                                            <a href="{{ route('agenda.index') }}"
                                                class="text-success small pt-1 fw-bold">
                                                <h6 class="text-center">{{ \App\Models\Agenda::where('user_id',
                                                    auth()->user()->id)->count() }}</h6>
                                                Lihat Agenda
                                            </a>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Agenda Card -->

                        <!-- Pengumuman Card -->
                        <div class="col-xxl-3 col-lg-4 col-sm-6">

                            <div class="card info-card customers-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Pengumuman <span>| This Year</span></h5>

                                    <div class="d-flex justify-content-around align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-megaphone"></i>
                                        </div>
                                        <div class="ps-3">
                                            <a href="{{ route('pengumuman.index') }}"
                                                class="text-danger small pt-1 fw-bold">
                                                <h6 class="text-center">{{ \App\Models\Pengumuman::where('user_id',
                                                    auth()->user()->id)->count() }}</h6>
                                                Lihat Pengumuman
                                            </a>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Pengumuman Card -->

                    </div>

                    <div class="row">
                        <!-- Left side columns -->
                        <div class="col-lg-8">

                            <!-- Agenda Terbaru -->
                            <div class="col">
                                <div class="card recent-sales overflow-auto">

                                    <div class="filter">
                                        <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <li class="dropdown-header text-start">
                                                <h6>Filter</h6>
                                            </li>

                                            <li><a class="dropdown-item" href="#">Today</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>

                                    <div class="card-body">
                                        <h5 class="card-title">Agenda <span>| Terbaru</span></h5>

                                        @if ($agenda->count())
                                        <table class="table datatable table-hover" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Judul</th>
                                                    <th scope="col">Waktu</th>
                                                    <th scope="col">Lokasi</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($agenda as $data)

                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td><a href="{{ route('agenda.show', $data->slug) }}">{{
                                                            $data->title
                                                            }}</a></td>
                                                    <td>{{ (new \Carbon\Carbon($data->date_time))->format('d F Y H:i')
                                                        }}
                                                    </td>
                                                    <td>{{ $data->location }}</td>
                                                    <td>
                                                        @if (\Carbon\Carbon::parse($data->date_time)->isToday())
                                                        <span class="badge bg-warning">Sedang Berlangsung</span>

                                                        @elseif (\Carbon\Carbon::parse($data->date_time)->isFuture())
                                                        <span class="badge bg-info">Segera</span>

                                                        @elseif (\Carbon\Carbon::parse($data->date_time)->isPast())
                                                        <span class="badge bg-secondary">Berakhir</span>
                                                        @endif
                                                    </td>
                                                </tr>

                                                @endforeach
                                            </tbody>
                                            @else
                                            <span class="text-center d-block text-secondary">
                                                <img src="{{ asset('assets/img/not-data.png') }}" class="img-fluid"
                                                    style="max-width: 40%" alt="">
                                                <p>Tidak Ada Agenda Terbaru</p>
                                            </span>

                                            @endif
                                        </table>

                                    </div>

                                </div>
                            </div><!-- End Agenda Terbaru -->

                            <!-- Top Selling -->
                            <div class="col">
                                <div class="card top-selling overflow-auto">

                                    <div class="filter">
                                        <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <li class="dropdown-header text-start">
                                                <h6>Filter</h6>
                                            </li>

                                            <li><a class="dropdown-item" href="#">Today</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>

                                    <div class="card-body pb-0">
                                        <h5 class="card-title">Top Selling <span>| Today</span></h5>

                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Preview</th>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Sold</th>
                                                    <th scope="col">Revenue</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row"><a href="#"><img src="assets/img/product-1.jpg"
                                                                alt=""></a>
                                                    </th>
                                                    <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa
                                                            voluptas
                                                            nulla</a></td>
                                                    <td>$64</td>
                                                    <td class="fw-bold">124</td>
                                                    <td>$5,828</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><a href="#"><img src="assets/img/product-2.jpg"
                                                                alt=""></a>
                                                    </th>
                                                    <td><a href="#" class="text-primary fw-bold">Exercitationem
                                                            similique
                                                            doloremque</a></td>
                                                    <td>$46</td>
                                                    <td class="fw-bold">98</td>
                                                    <td>$4,508</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><a href="#"><img src="assets/img/product-3.jpg"
                                                                alt=""></a>
                                                    </th>
                                                    <td><a href="#" class="text-primary fw-bold">Doloribus nisi
                                                            exercitationem</a></td>
                                                    <td>$59</td>
                                                    <td class="fw-bold">74</td>
                                                    <td>$4,366</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><a href="#"><img src="assets/img/product-4.jpg"
                                                                alt=""></a>
                                                    </th>
                                                    <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint
                                                            rerum
                                                            error</a></td>
                                                    <td>$32</td>
                                                    <td class="fw-bold">63</td>
                                                    <td>$2,016</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><a href="#"><img src="assets/img/product-5.jpg"
                                                                alt=""></a>
                                                    </th>
                                                    <td><a href="#" class="text-primary fw-bold">Sit unde debitis
                                                            delectus
                                                            repellendus</a></td>
                                                    <td>$79</td>
                                                    <td class="fw-bold">41</td>
                                                    <td>$3,239</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>

                                </div>
                            </div><!-- End Top Selling -->
                        </div><!-- End Left side columns -->

                        <!-- Right side columns -->
                        <div class="col-lg-4">

                            <!-- Recent Activity -->
                            <div class="card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Recent Activity <span>| Today</span></h5>

                                    <div class="activity">

                                        <div class="activity-item d-flex">
                                            <div class="activite-label">32 min</div>
                                            <i
                                                class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                            <div class="activity-content">
                                                Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo
                                                    officiis</a>
                                                beatae
                                            </div>
                                        </div><!-- End activity item-->

                                        <div class="activity-item d-flex">
                                            <div class="activite-label">56 min</div>
                                            <i
                                                class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                            <div class="activity-content">
                                                Voluptatem blanditiis blanditiis eveniet
                                            </div>
                                        </div><!-- End activity item-->

                                        <div class="activity-item d-flex">
                                            <div class="activite-label">2 hrs</div>
                                            <i
                                                class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                            <div class="activity-content">
                                                Voluptates corrupti molestias voluptatem
                                            </div>
                                        </div><!-- End activity item-->

                                        <div class="activity-item d-flex">
                                            <div class="activite-label">1 day</div>
                                            <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                            <div class="activity-content">
                                                Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati
                                                    voluptatem</a> tempore
                                            </div>
                                        </div><!-- End activity item-->

                                        <div class="activity-item d-flex">
                                            <div class="activite-label">2 days</div>
                                            <i
                                                class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                            <div class="activity-content">
                                                Est sit eum reiciendis exercitationem
                                            </div>
                                        </div><!-- End activity item-->

                                        <div class="activity-item d-flex">
                                            <div class="activite-label">4 weeks</div>
                                            <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                            <div class="activity-content">
                                                Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                                            </div>
                                        </div><!-- End activity item-->

                                    </div>

                                </div>
                            </div><!-- End Recent Activity -->

                            <!-- Kegiatan Terbaru  -->
                            <div class="card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body pb-0">
                                    <h5 class="card-title">Kegiatan<span> | Terbaru</span></h5>

                                    @if ($kegiatan->count())
                                    @foreach ($kegiatan as $data)
                                    <div class="news pb-3">
                                        <div class="post-item clearfix">
                                            <img src="{{ asset('storage/'. $data->image) }}" alt="Foto">
                                            <h4><a href="{{ route('kegiatan.show', $data->slug) }}">{{ $data->title
                                                    }}</a></h4>
                                            <p>{!! Str::limit(strip_tags($data->description), 100) !!}</p>
                                        </div>
                                    </div><!-- End sidebar recent posts-->
                                    @endforeach
                                    @else
                                    <span class="text-center text-secondary">
                                        <img src="{{ asset('assets/img/not-data.png') }}" class="img-fluid" alt="">
                                        <p>Tidak Ada Kegiatan Terbaru</p>
                                    </span>

                                    @endif

                                </div>
                            </div><!-- End Kegiatan Terbaru -->

                        </div><!-- End Right side columns -->
                    </div>

                </div>
        </section>

    </main>

    @push('scripts')

    <!-- Bootstrap 5 -->
    <script type="text/javascript" src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Main js -->
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Datatables -->
    <script type="text/javascript" src="{{ asset('DataTables/datatables.min.js') }}"> </script>



    <script>
        function updateGreeting() {
            const currentHour = new Date().getHours();
            let greeting;
    
            if (currentHour >= 1 && currentHour < 12) {
                greeting = 'Selamat Pagi';
            } else if (currentHour >= 12 && currentHour < 15) {
                greeting = 'Selamat Siang';
            } else if (currentHour >= 15 && currentHour < 18) {
                greeting = 'Selamat Sore';
            } else {
                greeting = 'Selamat Malam';
            }
    
            document.getElementById('greeting').innerText = greeting;
        }
    
        // Set initial greeting
        updateGreeting();
    
        // Update greeting every minute
        setInterval(updateGreeting, 60000); // 60000ms = 1 minute
    </script>
    @endpush
</x-app-layout>