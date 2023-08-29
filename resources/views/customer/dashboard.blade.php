@extends('layouts.cust')

@section('contents')
<body>

<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">
  <nav class="navbar navbar-expand-lg navbar-light sticky-top" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container"><a class="navbar-brand" href="index.html"><img src="{{ ('customer/public/assets/img/logo.svg') }}" height="31" alt="logo" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
      <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" aria-current="page" href="#feature">Kendaraan</a></li>
          <li class="nav-item"><a class="nav-link" aria-current="page" href="#validation">Transaksi</a></li>
        </ul>
        <div class="d-flex ms-lg-4"><a class="btn btn-secondary-outline" href="{{ ('/login') }}">Sign In</a><a class="btn btn-warning ms-3" href="{{ ('/register') }}">Sign Up</a></div>
      </div>
    </div>
  </nav>
  <section class="pt-7">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 text-md-start text-center py-6">
          <h1 class="mb-4 fs-9 fw-bold">CARENT</h1>
          <p class="mb-6 lead text-secondary">Jelajahi Destinasi Impian Anda dengan Kepuasan dan Kenyamanan Tanpa Batas<br class="d-none d-xl-block" />in one place! The most intuitive way to imagine<br class="d-none d-xl-block" />your next user experience.</p>
        </div>
        <div class="col-md-6 text-end"><img class="pt-7 pt-md-0 img-fluid" src="{{ ('customer/public/assets/img/hero/hero-img2.png') }}" alt="" /></div>
      </div>
    </div>
  </section>




  <!-- ============================================-->
  <!-- <section> begin ============================-->
  <section class="text-center py-0">

    <div class="container">
      <div class="container border-top py-3">
        <div class="row justify-content-between">
          <div class="col-12 col-md-auto mb-1 mb-md-0">
            <p class="mb-0">&copy; 2023 Carent </p>
          </div>
          <div class="col-12 col-md-auto">
            <p class="mb-0">
              Made with<span class="fas fa-heart mx-1 text-danger"> </span>by <a class="text-decoration-none ms-1" href="https://themewagon.com/" target="_blank">Fitri Zuyina Nur Azizah</a></p>
          </div>
        </div>
      </div>
    </div><!-- end of .container-->

  </section>
  <!-- <section> close ============================-->
  <!-- ============================================-->


</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->

@endsection

@section('asset')

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('customer/public/vendors/@popperjs/popper.min.js') }}"></script>
    <script src="{{ asset('customer/public/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('customer/public/vendors/is/is.min.js') }}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('customer/public/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('customer/public/assets/js/theme.js') }}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap" rel="stylesheet">
@endsection

