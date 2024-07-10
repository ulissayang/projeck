<x-guest.app-layout title="Visi & Misi">

  <main id="main">

    {{-- start heading --}}
    <x-guest.heading title="Visi & Misi" linkText="Visi & Misi" content="Sekolah Dasar Negeri 260 Maluku Tengah" />
    {{-- End heading --}}


    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">
          <!-- ======= Content Section ======= -->
          <div class="col-lg-8">

            <article class="blog-details">

              <div class="post-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="title text-center">{{ $visi->jenis }}</h2>

              {{-- <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">John
                      Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time
                        datetime="2020-01-01">Jan 1, 2022</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12
                      Comments</a></li>
                </ul>
              </div><!-- End meta top --> --}}

              <div class="content">
                <blockquote>
                  <p>
                    {!! $visi->deskripsi !!}
                  </p>
                  <span class="text-end text-muted small fst-italic d-block pt-5">&tilde; 
                    {{ $visi->updated_at->format('d - m - Y') }} &tilde;
                  </span>
                </blockquote>

                <h2 class="title text-center">{{ $misi->jenis }}</h2>
                <blockquote class="text-start">
                  <p>
                    {!! $misi->deskripsi !!}
                  </p>
                  <span class="text-end text-muted small fst-italic d-block pt-5">&tilde; 
                    {{ $misi->updated_at->format('d - m - Y') }} &tilde;
                  </span>
                </blockquote>



              </div><!-- End post content -->

              {{-- <div class="meta-bottom">
                <i class="bi bi-person"></i>
                <span class="tags">{{ $visi->user->name }}</span>
              </div><!-- End meta bottom --> --}}

            </article><!-- End blog post -->

          </div>
          <!-- End Content Section -->

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