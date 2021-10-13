<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('img/logo.png')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  {{-- Tailwind Jetstream --}}
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/user-profile.css')}}">

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}" defer></script>  
  @livewireStyles

  <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><img src="{{asset('img/logo.png')}}" alt="ItIndoSolution" width="40px" class="d-inline"><a href="/">ItIndoSolution</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="/#about">Tentang</a></li>
          <li class="dropdown"><a class="nav-link" href="/#services"><span>Pelayanan</span><i class="bi bi-chevron-down"></a></i>
            <ul>
              <li><a href="">Google Ads</a></li>
              <li class="dropdown"><a href="">Jasa Pembuatan Website <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="">Landing Page</a></li>
                  <li><a href="">Company Profile</a></li>
                  <li><a href="">Penjualan Online</a></li>
                  <li><a href="">Custom WEB</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
          {{-- <li><a class="nav-link scrollto {{ request()->is('portfolio-details') ? ' active' : ''}}" href="#portfolio">Portfolio</a></li > --}}
          <li><a class="nav-link scrollto" href="/#contact">Kontak</a></li>
          @if (Route::has('login'))
          <li class="dropdown"><a class="getstarted" href="#">{{Auth::user()->username}}<i class="bi bi-chevron-down"></a></i>
          <ul>
              @auth
              {{-- Button LogOut --}}
              <li> <a href="{{route('profile.show')}}">Profile</a> </li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <li>
                  <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                   this.closest('form').submit();">Log out</a>
                </li>
              </form>
            @else 
            <li class="dropdown"><a class="getstarted" href="#">Akun<i class="bi bi-chevron-down"></a></i>
            <li><a href="{{route('login')}}">Log in</a></li>
            <li><a href="{{route('register')}}">Daftar</a></li>
              {{-- End Button --}}
              @endauth
            @endif
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>ITINDOSOLUTION</h3>
            <p>
              Jl.Pademangan Timur 4 No.80 <br>
              Jakarta Utara, 14410<br>
              DKI Jakarta <br><br>
              <strong>Phone:</strong> +62 877 8298 7067<br>
              <strong>Email:</strong> rizatsakmir@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Jelajahi ITINDOSOLUTION</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/#hero">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#about">Tentang</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#services">Pelayanan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#team">Team</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#faq">FAQ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#contact">Kontak</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Pelayanan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Google Ads</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Jasa Pembuatan Website</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Social Media</h4>
            <p>Ikuti social media kami.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>ITINDOSOLUTION</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Developer as team <a href="/#team">ITINDOSOLUTION</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/aos/aos.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('vendor/waypoints/noframework.waypoints.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>

  {{-- Jquery --}}
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

  {{-- show profile --}}
  <script src="{{asset('js/showProfile.js')}}"></script>
  @livewireScripts
</body>

</html>