<x-guest.app-layout title="Kontak">

  <main id="main">

    {{-- start heading --}}
    <x-guest.heading title="Kontak" linkText="Kontak" content="Sekolah Dasar Negeri 260 Maluku Tengah" />
    {{-- End heading --}}

    <!-- ======= Content Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-12">

            <!-- ======= Contact Section ======= -->
            <section class="contact">
              <div class="container" data-aos="fade-up">

                <div class="section-header">
                  <h2>Contact</h2>
                  <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt
                    quis dolorem dolore earum</p>
                </div>

                <div class="row gx-lg-0 gy-4 mb-5">

                  <div class="col-lg-5">

                    <div class="info-container d-flex flex-column align-items-center justify-content-center">
                      <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                          <h4>Location:</h4>
                          <p>{{ $kontak->alamat }}</p>
                        </div>
                      </div><!-- End Info Item -->

                      <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                          <h4>Email:</h4>
                          <p>{{ $kontak->email }}</p>
                        </div>
                      </div><!-- End Info Item -->

                      <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                          <h4>Call:</h4>
                          <p>{{ $kontak->telp }}</p>
                        </div>
                      </div><!-- End Info Item -->

                      <div class="info-item d-flex">
                        <i class="bi bi-clock flex-shrink-0"></i>
                        <div>
                          <h4>Open Hours:</h4>
                          <p>{{ $kontak->jam_kerja }}</p>
                        </div>
                      </div><!-- End Info Item -->
                    </div>

                  </div>

                  <div class="col-lg-7">
                    <form action="mailto:ulissleksmart@gmail.com" method="GET" class="php-email-form">
                      <div class="row">
                        <div class="form-group">
                          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                            required>
                        </div>
                        <div class=" form-group mt-3 ">
                          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                            required>
                        </div>
                      </div>
                      <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                          required>
                      </div>
                      <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="7" placeholder="Message"
                          required></textarea>
                      </div>
                      <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                      </div>
                      <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                  </div><!-- End Contact Form -->


                </div>

                <div class="row overflow-hidden rounded-3 shadow">
                  <iframe class="px-0 mx-0"
                    src="{{ $kontak->map }}"
                    frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>

              </div>
            </section><!-- End Contact Section -->

          </div>
        </div>

      </div>
    </section><!-- End Content Section -->

  </main><!-- End #main -->

</x-guest.app-layout>