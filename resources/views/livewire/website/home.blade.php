<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}

    <!-- Hero Section - Home Page -->
    <section id="hero" class="hero">

        <img src="{{asset('assetsWebsite/img/hero-bg.jpg')}}" alt="" data-aos="fade-in">

        <div class="container">
          <div class="row">
            <div class="col-lg-10">
              <h2 data-aos="fade-up" data-aos-delay="100">Welcome to Our Website</h2>
              <p data-aos="fade-up" data-aos-delay="200">We are team of talented designers making websites with Bootstrap</p>
            </div>
            <div class="col-lg-5">
              <form action="#" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="300">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" class="btn btn-primary" value="Sign up">
              </form>
            </div>
          </div>
        </div>

      </section><!-- End Hero Section -->

      <!-- Clients Section - Home Page -->
      <section id="clients" class="clients">

        <div class="container-fluid" data-aos="fade-up">

          <div class="row gy-4">

            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img src="{{asset('assetsWebsite/img/clients/client-1.png')}}" class="img-fluid" alt="">
            </div><!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img src="{{asset('assetsWebsite/img/clients/client-2.png')}}" class="img-fluid" alt="">
            </div><!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img src="{{asset('assetsWebsite/img/clients/client-3.png')}}" class="img-fluid" alt="">
            </div><!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img src="{{asset('assetsWebsite/img/clients/client-4.png')}}" class="img-fluid" alt="">
            </div><!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img src="{{asset('assetsWebsite/img/clients/client-5.png')}}" class="img-fluid" alt="">
            </div><!-- End Client Item -->

            <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img src="{{asset('assetsWebsite/img/clients/client-6.png')}}" class="img-fluid" alt="">
            </div><!-- End Client Item -->

          </div>

        </div>

      </section>
      <!-- End Clients Section -->

      <!-- About Section - Home Page -->

      <!-- End About Section -->

      <!-- Stats Section - Home Page -->
      <section id="stats" class="stats">

        <img src="{{asset('assetsWebsite/img/stats-bg.jpg')}}" alt="" data-aos="fade-in">

        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

          <div class="row gy-4">

            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Clients</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
                <p>Workers</p>
              </div>
            </div><!-- End Stats Item -->

          </div>

        </div>

      </section><!-- End Stats Section -->

      <!-- Services Section - Home Page -->
      @livewire('website.services.services')

      <!-- End Services Section -->

      <!-- Features Section - Home Page -->
      <section id="features" class="features">

        <!--  Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Features</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

          <div class="row gy-4 align-items-center features-item">
            <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
              <h3>Corporis temporibus maiores provident</h3>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
              </p>
              <a href="#" class="btn btn-get-started">Get Started</a>
            </div>
            <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
              <div class="image-stack">
                <img src="{{asset('assetsWebsite/img/features-light-1.jpg')}}" alt="" class="stack-front">
                <img src="{{asset('assetsWebsite/img/features-light-2.jpg')}}" alt="" class="stack-back">
              </div>
            </div>
          </div><!-- Features Item -->

          <div class="row gy-4 align-items-stretch justify-content-between features-item ">
            <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
              <img src="{{asset('assetsWebsite/img/features-light-3.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
              <h3>Sunt consequatur ad ut est nulla</h3>
              <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
              <ul>
                <li><i class="bi bi-check"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                <li><i class="bi bi-check"></i><span> Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                <li><i class="bi bi-check"></i> <span>Facilis ut et voluptatem aperiam. Autem soluta ad fugiat</span>.</li>
              </ul>
              <a href="#" class="btn btn-get-started align-self-start">Get Started</a>
            </div>
          </div><!-- Features Item -->

        </div>

      </section><!-- End Features Section -->

      <!-- Portfolio Section - Home Page -->
      @livewire('website.portfolio.portfolio')

      <!-- End Portfolio Section -->

      
      <!-- Faq Section - Home Page -->
      <section id="faq" class="faq">

        <div class="container">

          <div class="row gy-4">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="content px-xl-5">
                <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                </p>
              </div>
            </div>

            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

              <div class="faq-container">
                <div class="faq-item faq-active">
                  <h3><span class="num">1.</span> <span>Non consectetur a erat nam at lectus urna duis?</span></h3>
                  <div class="faq-content">
                    <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->

                <div class="faq-item">
                  <h3><span class="num">2.</span> <span>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</span></h3>
                  <div class="faq-content">
                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->

                <div class="faq-item">
                  <h3><span class="num">3.</span> <span>Dolor sit amet consectetur adipiscing elit pellentesque?</span></h3>
                  <div class="faq-content">
                    <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->

                <div class="faq-item">
                  <h3><span class="num">4.</span> <span>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</span></h3>
                  <div class="faq-content">
                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->

                <div class="faq-item">
                  <h3><span class="num">5.</span> <span>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</span></h3>
                  <div class="faq-content">
                    <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->

              </div>

            </div>
          </div>

        </div>

      </section><!-- End Faq Section -->

      <!-- Team Section - Home Page -->
      @livewire('website.team.team')

      <!-- End Team Section -->

      <!-- Call-to-action Section - Home Page -->
      <section id="call-to-action" class="call-to-action">

        <img src="{{asset('assetsWebsite/img/cta-bg.jpg')}}" alt="">

        <div class="container">
          <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-xl-10">
              <div class="text-center">
                <h3>Call To Action</h3>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="cta-btn" href="#">Call To Action</a>
              </div>
            </div>
          </div>
        </div>

      </section><!-- End Call-to-action Section -->

      <!-- Testimonials Section - Home Page -->
      @livewire('website.testimonials.testimonials')

      <!-- End Testimonials Section -->

      <!-- Recent-posts Section - Home Page -->
      {{-- <section id="recent-posts" class="recent-posts">

        <!--  Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Recent Posts</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

          <div class="row gy-4">

            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <article>

                <div class="post-img">
                  <img src="{{asset('assetsWebsite/img/blog/blog-1.jpg')}}" alt="" class="img-fluid">
                </div>

                <p class="post-category">Politics</p>

                <h2 class="title">
                  <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
                </h2>

                <div class="d-flex align-items-center">
                  <img src="{{asset('assetsWebsite/img/blog/blog-author.jpg')}}" alt="" class="img-fluid post-author-img flex-shrink-0">
                  <div class="post-meta">
                    <p class="post-author">Maria Doe</p>
                    <p class="post-date">
                      <time datetime="2022-01-01">Jan 1, 2022</time>
                    </p>
                  </div>
                </div>

              </article>
            </div><!-- End post list item -->

            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <article>

                <div class="post-img">
                  <img src="{{asset('assetsWebsite/img/blog/blog-2.jpg')}}" alt="" class="img-fluid">
                </div>

                <p class="post-category">Sports</p>

                <h2 class="title">
                  <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
                </h2>

                <div class="d-flex align-items-center">
                  <img src="{{asset('assetsWebsite/img/blog/blog-author-2.jpg')}}" alt="" class="img-fluid post-author-img flex-shrink-0">
                  <div class="post-meta">
                    <p class="post-author">Allisa Mayer</p>
                    <p class="post-date">
                      <time datetime="2022-01-01">Jun 5, 2022</time>
                    </p>
                  </div>
                </div>

              </article>
            </div><!-- End post list item -->

            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <article>

                <div class="post-img">
                  <img src="{{asset('assetsWebsite/img/blog/blog-3.jpg')}}" alt="" class="img-fluid">
                </div>

                <p class="post-category">Entertainment</p>

                <h2 class="title">
                  <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
                </h2>

                <div class="d-flex align-items-center">
                  <img src="{{asset('assetsWebsite/img/blog/blog-author-3.jpg')}}" alt="" class="img-fluid post-author-img flex-shrink-0">
                  <div class="post-meta">
                    <p class="post-author">Mark Dower</p>
                    <p class="post-date">
                      <time datetime="2022-01-01">Jun 22, 2022</time>
                    </p>
                  </div>
                </div>

              </article>
            </div><!-- End post list item -->

          </div><!-- End recent posts list -->

        </div>

      </section> --}}
      <!-- End Recent-posts Section -->

      <!-- Contact Section - Home Page -->
      @livewire('website.contact.contact')

      <!-- End Contact Section -->
</div>
