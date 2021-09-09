<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Kelurahan Sukagalih</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    
    @yield('styles')

    <!-- Favicons -->
    <link href="{{ secure_asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{ secure_asset('assets/img/apple-touch-icon.png')}}" rel="icon">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href=" {{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href=" {{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href=" {{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href=" {{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href=" {{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href=" {{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href=" {{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href=" {{ asset('assets/css/style.css') }}" rel="stylesheet">
  
    <!-- =======================================================
    * Template Name: Medicio - v2.1.1
    * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
  </head>
  
  <body>
  
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center static-top">
      <div class="container d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
          <i class="icofont-clock-time"></i> Senin - Jum'at, 8AM to 3PM
        </div>
        <div class="d-flex align-items-center">
          <i class="icofont-phone"></i> (022) 9987812321
        </div>
      </div>
    </div>
  
    <!-- ======= Header ======= -->
    <header id="header" class="static-top">
      <div class="container d-flex align-items-center">
  
        <a href="index.html" class="logo mr-auto">KELURAHAN SUKAGALIH
        <!--    <img src="assets/img/logo.png" alt=""></a> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="logo mr-auto"><a href="index.html">Medicio</a></h1> -->
  
        <nav class="nav-menu d-none d-lg-block">
          <ul>
              <li class="active"><a href="/">Home</a></li>
              <li><a href="/#about">Tentang</a></li>
              <li><a href="/#gallery">Gallery</a></li>
              <li><a href="http://unla.ac.id/" target="_blank" rel="noopener noreferrer">UNLA</a></li>
              <li class="drop-down"><a href="">Layanan</a>
                  <ul>
                      <li><a href="/schedule-service/add/1">Penerbitan KTP</a></li>
                      <li><a href="/schedule-service/add/2">Penerbitan KK</a></li>
                  </ul>
              </li>
              <li><a href="/login">Login</a></li>
          </ul>
        </nav><!-- .nav-menu -->
      </div>
    </header><!-- End Header -->
  

    @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>KELURAHAN SUKAGALIH x UNLA</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
        {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <!-- Vendor JS Files -->
  <script src=" {{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src=" {{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src=" {{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src=" {{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src=" {{ asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src=" {{ asset('assets/vendor/counterup/counterup.min.js') }}"></script>  
  <script src=" {{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>  
  <script src=" {{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>  
  <script src=" {{ asset('assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->

  <script src=" {{ asset('assets/js/main.js') }}"></script>

  @yield('javascripts')

</body>

</html>