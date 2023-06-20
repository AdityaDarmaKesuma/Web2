@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BizLand Shoop</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="assets/css/styleku1.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('tugas13/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('tugas13/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('tugas13/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('tugas13/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('tugas13/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('tugas13/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('tugas13/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('tugas13/css/styleku.css') }}" rel="stylesheet">
  <link href="{{ asset('tugas13/css/styleku1.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">BizLand<span>Shoop.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

    </div>
  </header><!-- End Header -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3>Produk <span>Kami</span></h3>
          <p>Produk kami merupakan pilihan terbaik untuk memenuhi kebutuhan Anda</p>
        </div>
        @foreach ($produk as $p)
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="product">
              <img src="{{ asset('tugas13/img/gambar/ac.jpg') }}" alt="Gambar produk">
              <h2> {{$p->nama}} </h2>
              <span class="price"> Rp.4.000.000 </span>
              <button class="buy" onclick="location.href='form_pesanan.php'">Beli Sekarang</button>
              <br>
              <button class="detail" onclick="location.href='ac.php'"> Detail Produk </button>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </section><!-- End Services Section -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
@endsection