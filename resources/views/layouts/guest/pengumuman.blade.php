<x-app-layout title="Pengumuman">
  <main id="main">

    {{-- start heading --}}
    <x-guest.heading title="Pengumuman" content="Sekolah Dasar Negeri 260 Maluku Tengah" />
    {{-- End heading --}}

    <section class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <!-- ======= Content Section ======= -->
          <div class="col-lg-8 posts-list">
            <div class="row gy-4">

              <div class=" col-md-6">
                <article>

                  <div class="post-img">
                    <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                  </div>

                  <p class="post-category">Politics</p>

                  <h2 class="title">
                    <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
                  </h2>

                  <div class="d-flex align-items-center">
                    <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                    <div class="post-meta">
                      <p class="post-author-list">Maria Doe</p>
                      <p class="post-date">
                        <time datetime="2022-01-01">Jan 1, 2022</time>
                      </p>
                    </div>
                  </div>

                </article>
              </div><!-- End post list item -->

              <div class=" col-md-6">
                <article>

                  <div class="post-img">
                    <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
                  </div>

                  <p class="post-category">Sports</p>

                  <h2 class="title">
                    <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
                  </h2>

                  <div class="d-flex align-items-center">
                    <img src="assets/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                    <div class="post-meta">
                      <p class="post-author-list">Allisa Mayer</p>
                      <p class="post-date">
                        <time datetime="2022-01-01">Jun 5, 2022</time>
                      </p>
                    </div>
                  </div>

                </article>
              </div><!-- End post list item -->

              <div class=" col-md-6">
                <article>

                  <div class="post-img">
                    <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
                  </div>

                  <p class="post-category">Entertainment</p>

                  <h2 class="title">
                    <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
                  </h2>

                  <div class="d-flex align-items-center">
                    <img src="assets/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                    <div class="post-meta">
                      <p class="post-author-list">Mark Dower</p>
                      <p class="post-date">
                        <time datetime="2022-01-01">Jun 22, 2022</time>
                      </p>
                    </div>
                  </div>

                </article>
              </div><!-- End post list item -->

              <div class=" col-md-6">
                <article>

                  <div class="post-img">
                    <img src="assets/img/blog/blog-4.jpg" alt="" class="img-fluid">
                  </div>

                  <p class="post-category">Sports</p>

                  <h2 class="title">
                    <a href="blog-details.html">Non rem rerum nam cum quo minus olor distincti</a>
                  </h2>

                  <div class="d-flex align-items-center">
                    <img src="assets/img/blog/blog-author-4.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                    <div class="post-meta">
                      <p class="post-author-list">Lisa Neymar</p>
                      <p class="post-date">
                        <time datetime="2022-01-01">Jun 30, 2022</time>
                      </p>
                    </div>
                  </div>

                </article>
              </div><!-- End post list item -->

              <div class=" col-md-6">
                <article>

                  <div class="post-img">
                    <img src="assets/img/blog/blog-5.jpg" alt="" class="img-fluid">
                  </div>

                  <p class="post-category">Politics</p>

                  <h2 class="title">
                    <a href="blog-details.html">Accusamus quaerat aliquam qui debitis facilis consequatur</a>
                  </h2>

                  <div class="d-flex align-items-center">
                    <img src="assets/img/blog/blog-author-5.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                    <div class="post-meta">
                      <p class="post-author-list">Denis Peterson</p>
                      <p class="post-date">
                        <time datetime="2022-01-01">Jan 30, 2022</time>
                      </p>
                    </div>
                  </div>

                </article>
              </div><!-- End post list item -->

              <div class=" col-md-6">
                <article>

                  <div class="post-img">
                    <img src="assets/img/blog/blog-6.jpg" alt="" class="img-fluid">
                  </div>

                  <p class="post-category">Entertainment</p>

                  <h2 class="title">
                    <a href="blog-details.html">Distinctio provident quibusdam numquam aperiam aut</a>
                  </h2>

                  <div class="d-flex align-items-center">
                    <img src="assets/img/blog/blog-author-6.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                    <div class="post-meta">
                      <p class="post-author-list">Mika Lendon</p>
                      <p class="post-date">
                        <time datetime="2022-01-01">Feb 14, 2022</time>
                      </p>
                    </div>
                  </div>

                </article>
              </div><!-- End post list item -->
            </div>
          </div>
          {{-- end content section --}}

          {{-- sidebar start --}}
          <div class="col-lg-4">
            <x-guest.sidebar />
          </div>
          {{-- sidebar end --}}

          <div class="blog-pagination">
            <ul class="justify-content-center">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
            </ul>
          </div><!-- End blog pagination -->

        </div>
      </div>
    </section>

  </main><!-- End #main -->
</x-app-layout>