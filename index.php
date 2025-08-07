<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> VYNTEQ Global Private Limited </title>
  <link href="assets/images/logo.png" rel="icon" />

  <!-- ======= Google Font =======-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet">
  <!-- End Google Font-->

  <!-- ======= Styles =======-->
  <link href="assets/vendors/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendors/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="assets/vendors/glightbox/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendors/aos/aos.css" rel="stylesheet">
  <!-- End Styles-->

  <!-- ======= Theme Style =======-->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- End Theme Style-->

  <!-- ======= Apply theme =======-->
  <script>
    // Apply the theme as early as possible to avoid flicker
    (function () {
      const storedTheme = localStorage.getItem('theme') || 'light';
      document.documentElement.setAttribute('data-bs-theme', storedTheme);
    })();
  </script>
</head>

<body>


  <!-- ======= Site Wrap =======-->
  <div class="site-wrap">

    <!-- ======= Header =======-->
    <header class="fbs__net-navbar navbar navbar-expand-lg dark" aria-label="freebootstrap.net navbar">
      <div class="container d-flex align-items-center justify-content-between">

        <!-- Start Logo-->
        <a class="navbar-brand w-auto" href="index.html">

          <!-- logo dark--><img class="logo dark img-fluid" src="assets/images/logo.png" alt="logo"
            style="width: 175px; margin-top: 5px;">

          <!-- logo light--><img class="logo light img-fluid" src="assets/images/logo.png"
            alt=" image placeholder" style="width: 175px; margin-top: 5px;">

        </a>
        <!-- End Logo-->

        <!-- Start offcanvas-->
        <div class="offcanvas offcanvas-start w-75" id="fbs__net-navbars" tabindex="-1"
          aria-labelledby="fbs__net-navbarsLabel">

          <div class="offcanvas-header">
            <div class="offcanvas-header-logo">

              <a class="logo-link" id="fbs__net-navbarsLabel" href="index.html">

                <!-- logo dark--><img class="logo dark img-fluid" src="assets/images/logo.png"
                  alt=" image placeholder" style="width: 175px; margin-top: 5px;">

                <!-- logo light--><img class="logo light img-fluid" src="assets/images/logo.png"
                  alt=" image placeholder" style="width: 175px; margin-top: 5px;"></a>

            </div>
            <button class="btn-close btn-close-black" type="button" data-bs-dismiss="offcanvas"
              aria-label="Close"></button>
          </div>

          <div class="offcanvas-body align-items-lg-center">

            <ul class="navbar-nav nav me-auto ps-lg-5 mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link scroll-link active" aria-current="page" href="#home">Home</a></li>
              <li class="nav-item"><a class="nav-link scroll-link" href="#about">About</a></li>
              <li class="nav-item"><a class="nav-link scroll-link" href="#why-choose">Why Choose Us</a></li>
              <li class="nav-item"><a class="nav-link scroll-link" href="#services">Services</a></li>
              <!-- <li class="nav-item"><a class="nav-link scroll-link" href="#contact">Contact Us</a></li> -->
            </ul>

          </div>
        </div>
        <!-- End offcanvas-->

        <div class="ms-auto w-auto">
          <div class="header-social d-flex align-items-center gap-1"><a class="btn btn-primary py-2"
              href="#contact">Contact Us</a>

            <button class="fbs__net-navbar-toggler justify-content-center align-items-center ms-auto"
              data-bs-toggle="offcanvas" data-bs-target="#fbs__net-navbars" aria-controls="fbs__net-navbars"
              aria-label="Toggle navigation" aria-expanded="false">
              <svg class="fbs__net-icon-menu" xmlns="https://www.w3.org/2000/svg" width="24" height="24"
                viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <line x1="21" x2="3" y1="6" y2="6"></line>
                <line x1="15" x2="3" y1="12" y2="12"></line>
                <line x1="17" x2="3" y1="18" y2="18"></line>
              </svg>
              <svg class="fbs__net-icon-close" xmlns="https://www.w3.org/2000/svg" width="24" height="24"
                viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M18 6 6 18"></path>
                <path d="m6 6 12 12"></path>
              </svg>
            </button>

          </div>

        </div>
      </div>
    </header>
    <!-- End Header-->

    <!-- ======= Main =======-->
    <main>


      <!-- ======= Hero =======-->
      <section class="hero__v6 section" id="home">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
              <div class="row">
                <div class="col-lg-11"><span class="hero-subtitle text-uppercase" data-aos="fade-up"
                    data-aos-delay="0">Innovative Buiseness Solutions</span>
                  <h1 class="hero-title mb-3" data-aos="fade-up" data-aos-delay="100">Innovate, Integrate, Elevate</h1>
                  <p class="hero-description mb-4 mb-lg-5" data-aos="fade-up" data-aos-delay="200">Experience the future
                    of innovative Buiseness with our secure, efficient, and user-friendly Buiseness services.</p>
                  <div class="cta d-flex gap-2 mb-4 mb-lg-5" data-aos="fade-up" data-aos-delay="300"><a class="btn"
                      href="#contact">Get Started Now</a>

                  </div>
                  <div class="logos mb-4" data-aos="fade-up" data-aos-delay="400"><span
                      class="logos-title text-uppercase mb-4 d-block">Trusted by major companies worldwide</span>
                    <div class="logos-images d-flex gap-4 align-items-center"><img
                        class="img-fluid js-img-to-inline-svg"
                        src="assets/images/logo/actual-size/logo-air-bnb__black.svg" alt="Company 1"
                        style="width: 110px;"><img class="img-fluid js-img-to-inline-svg"
                        src="assets/images/logo/actual-size/logo-ibm__black.svg" alt="Company 2"
                        style="width: 80px;"><img class="img-fluid js-img-to-inline-svg"
                        src="assets/images/logo/actual-size/logo-google__black.svg" alt="Company 3"
                        style="width: 110px;"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="hero-img">
                <!-- <img class="img-card img-fluid" src="assets/images/card-expenses.png" alt="Image card" data-aos="fade-down" data-aos-delay="600"> -->
                <img class="img-main img-fluid rounded-4" src="assets/images/bannertop.jpg" alt="Hero Image"
                  data-aos="fade-in" data-aos-delay="500">
              </div>
            </div>
          </div>
        </div>
        <!-- End Hero-->
      </section>
      <!-- End Hero-->

      <!-- ======= About =======-->
      <section class="about__v4 section" id="about">
        <div class="container">
          <div class="row">
            <div class="col-md-6 order-md-2">
              <div class="row justify-content-end">
                <div class="col-md-11 mb-4 mb-md-0"><span class="subtitle text-uppercase mb-3" data-aos="fade-up"
                    data-aos-delay="0">About us</span>
                  <h2 class="mb-4" data-aos="fade-up" data-aos-delay="100">About VYNTEQ Global Private Limited</h2>
                  <div data-aos="fade-up" data-aos-delay="200">
                    <p><strong>Empowering Progress Through Innovation</strong></p>
                    <p style="text-align: justify">
                      VYNTEQ Global Private Limited is a forward-thinking and multi-disciplinary
                      enterprise committed to delivering dynamic solutions across diverse business
                      sectors. Founded on the principles of innovation, integrity, and
                      customer-centricity, VYNTEQ has established itself as a trusted partner for
                      clients seeking reliable, scalable, and future-ready services.
                    </p>
                    <p style="text-align: justify">
                      At VYNTEQ, we believe that success lies in our ability to adapt, evolve, and
                      create lasting value. Our portfolio spans across enterprise technology,
                      International Trading, Import & Export, business services, creative
                      solutions, and global commerce, offering clients comprehensive support
                      tailored to their unique needs.
                    </p>
                    <p style="text-align: justify">
                      Whether you're a startup, SME, or large organization, our mission is to
                      enable your growth through strategy, digital innovation, and world-class
                      service.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-wrap position-relative">
                <img class="img-fluid rounded-4" src="assets/images/about_2-min.jpg" alt=" image placeholder"
                  data-aos="fade-up" data-aos-delay="0">

                <div class="mission-statement p-4 rounded-4 d-flex gap-4" data-aos="fade-up" data-aos-delay="100">
                  <div class="mission-icon text-center rounded-circle"><i class="bi bi-lightbulb fs-4"></i></div>
                  <div>
                    <h3 class="text-uppercase fw-bold">Mission Statement</h3>
                    <p class=" mb-0">To deliver high-quality, reliable, and customized services that empower businesses
                      to grow and thrive. We embrace technology and creativity as key drivers of transformation, while
                      fostering transparent, long-term relationships with our clients and stakeholders worldwide.</p>
                  </div>
                </div>
                <h4 class="small fw-bold mt-5 mb-3" data-aos="fade-up" data-aos-delay="300">Key Values and Vision</h4>
                <ul class="d-flex flex-row flex-wrap list-unstyled gap-3 features" data-aos="fade-up"
                  data-aos-delay="400">
                  <li class="d-flex align-items-center gap-2"><span class="icon rounded-circle text-center"><i
                        class="bi bi-check"></i></span><span class="text">Innovation</span></li>
                  <li class="d-flex align-items-center gap-2"><span class="icon rounded-circle text-center"><i
                        class="bi bi-check"></i></span><span class="text">Security</span></li>
                  <li class="d-flex align-items-center gap-2"><span class="icon rounded-circle text-center"><i
                        class="bi bi-check"></i></span><span class="text">Quality & Integrity </span></li>
                  <li class="d-flex align-items-center gap-2"><span class="icon rounded-circle text-center"><i
                        class="bi bi-check"></i></span><span class="text">Transparency</span></li>
                  <li class="d-flex align-items-center gap-2"><span class="icon rounded-circle text-center"><i
                        class="bi bi-check"></i></span><span class="text">Empowerment</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About-->

      <!-- ======= Why choose us =======-->
      <section class="section features__v2" id="why-choose">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="d-lg-flex p-5 rounded-4 content" data-aos="fade-in" data-aos-delay="0">
                <div class="row">
                  <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="0">
                    <div class="row">
                      <div class="col-lg-11">
                        <div class="h-100 flex-column justify-content-between d-flex">
                          <div>
                            <h2 class="mb-4">Why Choose us</h2>
                            <p class="mb-5" style="text-align: justify">Experience the future of finance with our
                              secure, efficient, and user-friendly financial services. Our cutting-edge platform ensures
                              your transactions are safe, streamlined, and easy to manage, empowering you to take
                              control of your financial journey with confidence and convenience."</p>

                          </div>
                          <div class="align-self-start">
                            <!-- <a class="glightbox btn btn-play d-inline-flex align-items-center gap-2" href="https://www.youtube.com/watch?v=DQx96G4yHd8" data-gallery="video">
                                <i class="bi bi-play-fill"></i> Watch the Video</a> -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <div class="row justify-content-end">
                      <div class="col-lg-11">
                        <div class="row">
                          <div class="col-sm-6" data-aos="fade-up" data-aos-delay="0">
                            <div class="icon text-center mb-4"><i class="bi bi-person-check fs-4"></i></div>
                            <h3 class="fs-6 fw-bold mb-3">User-Friendly Interface</h3>
                            <p>Easy navigation with responsive design for various devices.</p>
                          </div>
                          <div class="col-sm-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon text-center mb-4"><i class="bi bi-graph-up fs-4"></i></div>
                            <h3 class="fs-6 fw-bold mb-3">Financial Analytics</h3>
                            <p>Budget tracking, expense categorization, and personalized insights.</p>
                          </div>
                          <div class="col-sm-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon text-center mb-4"><i class="bi bi-headset fs-4"></i></div>
                            <h3 class="fs-6 fw-bold mb-3">Customer Support</h3>
                            <p>24/7 service via chat, email, phone, and a detailed help center.</p>
                          </div>
                          <div class="col-sm-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon text-center mb-4"><i class="bi bi-shield-lock fs-4"></i></div>
                            <h3 class="fs-6 fw-bold mb-3">Security Features</h3>
                            <p>Data encryption, fraud detection, and prevention mechanisms.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Features-->


      <!-- ======= Services =======-->
      <section class="section services__v3" id="services">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-8 mx-auto text-center"><span class="subtitle text-uppercase mb-3" data-aos="fade-up"
                data-aos-delay="0">Our Services</span>
              <h2 class="mb-3" data-aos="fade-up" data-aos-delay="100">Empowering Financial Innovation Through
                Cutting-Edge Services</h2>
            </div>
          </div>
          <div class="row g-4">
            <!-- International Trading & Sourcing -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
              <div class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                <div><span class="icon mb-4">
                    <!-- Globe icon -->
                    <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 64 64" width="48" height="48"
                      fill="currentColor">
                      <circle cx="32" cy="32" r="30" stroke="currentColor" stroke-width="4" fill="none" />
                      <path d="M2,32h60M32,2c11,0 20,24 20,30s-9,30 -20,30" stroke="currentColor" stroke-width="4"
                        fill="none" />
                    </svg></span>
                  <h3 class="fs-5 mb-3">International Trading & Sourcing</h3>
                  <p class="mb-4">Export and import of a wide range of goods and commodities with end-to-end logistics
                    support.</p>
                </div><a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none" href="#"><span
                    class="icons"><i class="icon-1 bi bi-arrow-right-short"></i><i
                      class="icon-2 bi bi-arrow-right-short"></i></span><span>Read more</span></a>
              </div>
            </div>

            <!-- Import & Export Consulting -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                <div><span class="icon mb-4">
                    <!-- Document/Clipboard icon -->
                    <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 64 64" width="48" height="48"
                      fill="currentColor">
                      <rect x="16" y="8" width="32" height="48" rx="4" ry="4" stroke="currentColor" stroke-width="4"
                        fill="none" />
                      <line x1="24" y1="20" x2="40" y2="20" stroke="currentColor" stroke-width="4" />
                      <line x1="24" y1="30" x2="40" y2="30" stroke="currentColor" stroke-width="4" />
                      <line x1="24" y1="40" x2="40" y2="40" stroke="currentColor" stroke-width="4" />
                    </svg></span>
                  <h3 class="fs-5 mb-3">Import & Export Consulting</h3>
                  <p class="mb-4">Assistance with regulatory compliance, documentation, customs clearance, and global
                    market access.</p>
                </div><a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none" href="#"><span
                    class="icons"><i class="icon-1 bi bi-arrow-right-short"></i><i
                      class="icon-2 bi bi-arrow-right-short"></i></span><span>Read more</span></a>
              </div>
            </div>

            <!-- Business & Enterprise Solutions -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
              <div class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                <div><span class="icon mb-4">
                    <!-- Network / Enterprise icon -->
                    <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 64 64" width="48" height="48"
                      fill="currentColor">
                      <rect x="10" y="10" width="18" height="18" stroke="currentColor" stroke-width="4" fill="none" />
                      <rect x="36" y="10" width="18" height="18" stroke="currentColor" stroke-width="4" fill="none" />
                      <rect x="10" y="36" width="18" height="18" stroke="currentColor" stroke-width="4" fill="none" />
                      <rect x="36" y="36" width="18" height="18" stroke="currentColor" stroke-width="4" fill="none" />
                      <line x1="19" y1="28" x2="19" y2="36" stroke="currentColor" stroke-width="4" />
                      <line x1="45" y1="28" x2="45" y2="36" stroke="currentColor" stroke-width="4" />
                      <line x1="28" y1="19" x2="36" y2="19" stroke="currentColor" stroke-width="4" />
                      <line x1="28" y1="45" x2="36" y2="45" stroke="currentColor" stroke-width="4" />
                    </svg></span>
                  <h3 class="fs-5 mb-3">Business & Enterprise Solutions</h3>
                  <p class="mb-4">Tech-enabled business services across IT, software, fintech, and automation sectors.
                  </p>
                </div><a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none" href="#"><span
                    class="icons"><i class="icon-1 bi bi-arrow-right-short"></i><i
                      class="icon-2 bi bi-arrow-right-short"></i></span><span>Read more</span></a>
              </div>
            </div>

            <!-- Creative & Strategic Services -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
              <div class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                <div><span class="icon mb-4">
                    <!-- Magic wand / Spark icon -->
                    <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 64 64" width="48" height="48"
                      fill="currentColor">
                      <line x1="32" y1="8" x2="32" y2="56" stroke="currentColor" stroke-width="4" />
                      <line x1="8" y1="32" x2="56" y2="32" stroke="currentColor" stroke-width="4" />
                      <circle cx="32" cy="32" r="10" stroke="currentColor" stroke-width="4" fill="none" />
                      <circle cx="32" cy="32" r="4" fill="currentColor" />
                    </svg></span>
                  <h3 class="fs-5 mb-3">Creative & Strategic Services</h3>
                  <p class="mb-4">Branding, business planning, and digital transformation to drive innovation.</p>
                </div><a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none" href="#"><span
                    class="icons"><i class="icon-1 bi bi-arrow-right-short"></i><i
                      class="icon-2 bi bi-arrow-right-short"></i></span><span>Read more</span></a>
              </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                <div>
                  <span class="icon mb-4">
                    <!-- Handshake icon -->
                    <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 64 64" width="48" height="48"
                      fill="currentColor">
                      <path d="M20 30l6 6 4-4 8 8 6-6-8-8 4-4-6-6-4 4-8-8-6 6 8 8z" stroke="currentColor"
                        stroke-width="2" fill="none" />
                    </svg>
                  </span>
                  <h3 class="fs-5 mb-3">Partnership & Vendor Management</h3>
                  <p class="mb-4">Helping clients build and manage strategic alliances, suppliers, and vendor networks
                    for operational efficiency.</p>
                </div>
                <a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none" href="#">
                  <span class="icons">
                    <i class="icon-1 bi bi-arrow-right-short"></i>
                    <i class="icon-2 bi bi-arrow-right-short"></i>
                  </span>
                  <span>Read more</span>
                </a>
              </div>
            </div>


            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                <div>
                  <span class="icon mb-4">
                    <!-- Rocket Launch icon -->
                    <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 64 64" width="48" height="48"
                      fill="currentColor">
                      <path d="M32 6c-5 8-4 20 4 28s20 9 28 4c-3-9-10-19-20-26S35 7 32 6z" stroke="currentColor"
                        stroke-width="2" fill="none" />
                      <path d="M16 48l8-8M12 52l4-4M20 44l4-4" stroke="currentColor" stroke-width="2" fill="none" />
                    </svg>
                  </span>
                  <h3 class="fs-5 mb-3">Startup & SME Support Services</h3>
                  <p class="mb-4">Comprehensive services for emerging businesses — from registration and licensing to
                    branding, tech setup, and growth consulting.</p>
                </div>
                <a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none" href="#">
                  <span class="icons">
                    <i class="icon-1 bi bi-arrow-right-short"></i>
                    <i class="icon-2 bi bi-arrow-right-short"></i>
                  </span>
                  <span>Read more</span>
                </a>
              </div>
            </div>

          </div>

        </div>
      </section>
      <!-- Services-->



      <!-- ======= Contact =======-->
      <section class="section contact__v2" id="contact">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-6 col-lg-7 mx-auto text-center"><span class="subtitle text-uppercase mb-3"
                data-aos="fade-up" data-aos-delay="0">Contact</span>
              <h2 class="h2 fw-bold mb-3" data-aos="fade-up" data-aos-delay="0">Contact Us</h2>
              <p data-aos="fade-up" data-aos-delay="100">Utilize our tools to develop your concepts and bring your
                vision to life. Once complete, effortlessly share your creations.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="d-flex gap-5 flex-column">
                <div class="d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="0">
                  <div class="icon d-block"><i class="bi bi-telephone"></i></div><span> <span
                      class="d-block">Phone</span><strong>+91 9566003885</strong></span>
                </div>
                <div class="d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon d-block"><i class="bi bi-send"></i></div><span> <span
                      class="d-block">Email</span><strong>sales@vynteqglobal.com</strong></span>
                </div>
                <div class="d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon d-block"><i class="bi bi-geo-alt"></i></div><span> <span
                      class="d-block">Address</span>
                    <address class="fw-bold">Coimbatore <br> India</address>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-wrapper" data-aos="fade-up" data-aos-delay="300">
                <form id="contactForm" method="POST" action="send-mail.php">

                  <div class="row gap-3 mb-3">
                    <div class="col-md-12">
                      <label class="mb-2" for="name">Name</label>
                      <input class="form-control" id="name" type="text" name="name" required="">
                    </div>
                    <div class="col-md-12">
                      <label class="mb-2" for="email">Email</label>
                      <input class="form-control" id="email" type="email" name="email" required="">
                    </div>
                  </div>
                  <div class="row gap-3 mb-3">
                    <div class="col-md-12">
                      <label class="mb-2" for="subject">Subject</label>
                      <input class="form-control" id="subject" type="text" name="subject">
                    </div>
                  </div>
                  <div class="row gap-3 gap-md-0 mb-3">
                    <div class="col-md-12">
                      <label class="mb-2" for="message">Message</label>
                      <textarea class="form-control" id="message" name="message" rows="5" required=""></textarea>
                    </div>
                  </div>
                  <button class="btn btn-primary fw-semibold" type="submit">Send Message</button>
                </form>
                <div class="mt-3 d-none alert alert-success" id="successMessage">Message sent successfully!</div>
                <div class="mt-3 d-none alert alert-danger" id="errorMessage">Message sending failed. Please try again
                  later.</div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact-->

      <!-- ======= Footer =======-->
      <footer class="footer pt-5 pb-5">
        <div class="container">

          <div class="row justify-content-between mb-5 g-xl-5">
            <div class="col-md-4 mb-5 mb-lg-0">
              <h3 class="mb-3">About</h3>
              <p class="mb-4" style="text-align: justify">VYNTEQ Global Private Limited is a forward-thinking and
                multi-disciplinary enterprise committed to delivering dynamic solutions across diverse business sectors.
              </p>
            </div>
            <div class="col-md-7">
              <div class="row g-2">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">

                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                  <h3 class="mb-3">Quick link</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Why choose us</a></li>
                    <li><a href="#">Services</a></li>

                  </ul>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 quick-contact">
                  <h3 class="mb-3">Contact</h3>
                  <p class="d-flex mb-3"><i class="bi bi-geo-alt-fill me-3"></i><span>Coimbatore, <br>India</span></p><a
                    class="d-flex mb-3" href="mailto:sales@vynteqglobal.com"><i
                      class="bi bi-envelope-fill me-3"></i><span>sales@vynteqglobal.com</span></a>
                  <a class="d-flex mb-3" href="tel://+91 9566003885"><i class="bi bi-telephone-fill me-3"></i><span>+91
                      9566003885</span></a>
                  <!-- <a class="d-flex mb-3" href="https://freebootstrap.net"><i class="bi bi-globe me-3"></i><span>FreeBootstrap.net</span></a> -->
                </div>
              </div>
            </div>
          </div>
          <div class="row credits pt-3">
            <div class="col-xl-8 text-center text-xl-start mb-3 mb-xl-0">

              &copy;
              <script>document.write(new Date().getFullYear());</script> VYNTEQ.
              All rights reserved.

            </div>
          </div>
        </div>
      </footer>
      <!-- End Footer-->

    </main>
  </div>

  <!-- ======= Back to Top =======-->
  <button id="back-to-top"><i class="bi bi-arrow-up-short"></i></button>
  <!-- End Back to top-->

  <!-- ======= Javascripts =======-->
  <script src="assets/vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="assets/vendors/gsap/gsap.min.js"></script>
  <script src="assets/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendors/isotope/isotope.pkgd.min.js"></script>
  <script src="assets/vendors/glightbox/glightbox.min.js"></script>
  <script src="assets/vendors/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendors/aos/aos.js"></script>
  <script src="assets/vendors/purecounter/purecounter.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/send_email.js"></script>

  <script>
    document.getElementById("contactForm").addEventListener("submit", function (e) {
      e.preventDefault();

      const form = e.target;
      const formData = new FormData(form);

      fetch("send-mail.php", {
        method: "POST",
        body: formData,
      })
        .then((response) => response.text())
        .then((result) => {
          if (result.trim() === "success") {
            document.getElementById("successMessage").classList.remove("d-none");
            form.reset();
          } else {
            document.getElementById("errorMessage").classList.remove("d-none");
          }
        })
        .catch((error) => {
          document.getElementById("errorMessage").classList.remove("d-none");
          console.error("Error:", error);
        });
    });
  </script>

  <!-- End JavaScripts-->
</body>

</html>