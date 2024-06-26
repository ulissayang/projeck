<x-app-layout title="Data Guru">
  <main id="main">

    {{-- start heading --}}
    <x-guest.heading title="Data Guru" content="Sekolah Dasar Negeri 260 Maluku Tengah" />
    {{-- End heading --}}

    <section class="sample-page">
      <div class="container" data-aos="fade-up">


        <section id="blog" class="blog team">
          <div class="container" data-aos="fade-up">

            <div class="row ">

              <!-- ======= Data Pendidik  ======= -->
              <div class="col-lg-8">

                <div class="row gy-4">
                  <div class="col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                      <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                      <h4>Walter White</h4>
                      <span>Web Development</span>
                      <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                    </div>
                  </div><!-- End Team Member -->

                  <div class="col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                      <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                      <h4>Sarah Jhinson</h4>
                      <span>Marketing</span>
                      <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                    </div>
                  </div><!-- End Team Member -->

                  <div class="col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                      <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                      <h4>William Anderson</h4>
                      <span>Content</span>
                      <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                    </div>
                  </div><!-- End Team Member -->

                  <div class="col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="member">
                      <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                      <h4>Amanda Jepson</h4>
                      <span>Accountant</span>
                      <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                    </div>
                  </div><!-- End Team Member -->
                </div>

              </div>
              <!-- End Data Pendidik Section -->

              {{-- start sidebar --}}
              <div class="col-lg-4">

                <x-guest.sidebar />

              </div>
              {{-- end sidebar --}}

            </div>

          </div>
        </section>

      </div>
    </section>

  </main><!-- End #main -->

</x-app-layout>

