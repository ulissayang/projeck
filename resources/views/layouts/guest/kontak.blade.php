<x-app-layout title="Kontak">

  <main id="main">

    {{-- start heading --}}
    <x-guest.heading title="Kontak" content="Sekolah Dasar Negeri 260 Maluku Tengah" />
    {{-- End heading --}}

    <!-- ======= Content Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

            <!-- ======= Contact Section ======= -->
            <section class="contact">
              <div class="container" data-aos="fade-up">

                <div class="section-header">
                  <h2>Contact</h2>
                  <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt
                    quis dolorem dolore earum</p>
                </div>

                <div class="row gx-lg-0 gy-4">

                  <div class="col-lg-5">

                    <div class="info-container d-flex flex-column align-items-center justify-content-center">
                      <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                          <h4>Location:</h4>
                          <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                      </div><!-- End Info Item -->

                      <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                          <h4>Email:</h4>
                          <p>info@example.com</p>
                        </div>
                      </div><!-- End Info Item -->

                      <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                          <h4>Call:</h4>
                          <p>+1 5589 55488 55</p>
                        </div>
                      </div><!-- End Info Item -->

                      <div class="info-item d-flex">
                        <i class="bi bi-clock flex-shrink-0"></i>
                        <div>
                          <h4>Open Hours:</h4>
                          <p>Mon-Sat: 11AM - 23PM</p>
                        </div>
                      </div><!-- End Info Item -->
                    </div>

                  </div>

                  <div class="col-lg-7 order-lg-2 order-md-3">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
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
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                      </div>
                      <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                  </div><!-- End Contact Form -->

                  <div class="col-lg-12 order-lg-3 order-md-2 ">
                    <iframe class="rounded-2 shadow"
                      src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                      frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                  </div>

                </div>

              </div>
            </section><!-- End Contact Section -->

          </div>

          {{-- sidebar start --}}
          <div class="col-lg-4">
            <x-guest.sidebar />
          </div>
          {{-- sidebar end --}}
        </div>

      </div>
    </section><!-- End Content Section -->

  </main><!-- End #main -->

</x-app-layout>