<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Third Party Inspection</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('material/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('material/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('material/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('material/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('material/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('material/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('material/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('material/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.html"><img src="{{ asset('./material/img/tpInspection-icon.png') }}"
                        alt="img not found!"></a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="{{ route("login") }}">login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Third Party Inspection</h1>
                    <h2>We offer an extensive array of industrial testing and inspection services tailored
                        for oil and gas plants, manufacturing facilities, refineries, and various other industries.</h2>
                    <div class="d-flex">
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 p-4 hero-img">
                    <img src="{{ asset('material/img/hero-img.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services mt-5">
            <div class="container">

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-laptop"></i></div>
                            <h4 class="title"><a href="">Inspection</a></h4>
                            <p class="description">Our inspectors are well-versed in the specific requirements of
                                various industries, guaranteeing thorough and accurate assessments.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-card-checklist"></i></div>
                            <h4 class="title"><a href="">Testing</a></h4>
                            <p class="description">We offer a wide range of testing services, including non-destructive
                                testing (NDT), material testing, and performance testing, among others.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-clipboard-data"></i></div>
                            <h4 class="title"><a href="">Verification</a></h4>
                            <p class="description">We understand the importance of timely information. Our detailed
                                inspection reports are delivered promptly, providing you with actionable insights.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-bookmark"></i></div>
                            <h4 class="title"><a href="">Certification</a></h4>
                            <p class="description">We understand the importance of timely information. Our detailed
                                inspection reports are delivered promptly, providing you with actionable insights.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container mt-5">

                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('material/img/about.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <h3>Key Highlights of Our Third-Party Inspection Services</h3>

                        <div class="container mt-3">
                            <ul>
                                <li><i class="bi bi-check-circle"></i> Quality Assurance: Our commitment to quality
                                    assurance is unwavering. We work closely with clients to ensure that their projects
                                    adhere to industry standards and regulations.</li>
                                <li><i class="bi bi-check-circle"></i> Customized Solutions: Every industry and project
                                    is unique. We tailor our inspection services to meet the specific needs and
                                    challenges of your operation.</li>
                                <li><i class="bi bi-check-circle"></i> Efficiency and Cost-Effectiveness: Our
                                    streamlined processes and efficient methodologies are designed to optimize both time
                                    and costs without compromising on the quality of our services.</li>
                            </ul>
                        </div>
                        <p>
                            Choose us for your Inspection needs ensures a reliable and independent assessment of your
                            material and processes. Partner with us for excellence in inspection services that you can
                            trust.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Clients</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Projects</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Hours Of Support</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Hard Workers</p>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Cta Section ======= -->
        <!-- <section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3>Call To Action</h3>
          <div class="col-lg-6 pt-4 pt-lg-0 content"></div>
           
            <p>
                Our Contacts Details
            </p>
          </div>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>

      </div>
    </section> -->
        <!-- End Cta Section -->



    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">

            <div class="container">

                <div class="row  justify-content-center">
                    <div class="col-lg-6">
                        <img class="copyright-img" src="{{ asset('./material/img/tpInspection-icon.png') }}"
                            alt="">
                        <p>Subscribe to Our Newsletter for Exclusive Insights: Your Gateway to Excellence in Third-Party
                            Inspection Services.</p>
                    </div>
                </div>

                <div class="row footer-newsletter justify-content-center">
                    <div class="col-lg-6">
                        <form action="" method="post">
                            <input type="email" name="email" placeholder="Enter your Email"><input
                                type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>

                <div class="social-links">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>

            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong>Third Party Inspection</span></strong>. All Rights Reserved
            </div>
            <div class="credits">

                Developed By <a href="www.linkedin.com/in/webdevma138">MAH Developers</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('material/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('material/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('material/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('material/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('material/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('material/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('material/js/main.js') }}"></script>

</body>

</html>
