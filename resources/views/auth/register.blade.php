<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>SCHIZO</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/produk/logo.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('home/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('home/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/css/templatemo-scholar.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/css/animate.css') }}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    {{-- Style --}}
    <link rel="stylesheet" href="{{ asset('home/assets/css/style.css') }}">
    <!--

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area-katalog header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="#home" class="logo">
                        <h1><img src="{{ asset('assets/produk/logo.png') }}" style="width: 100px"></h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Serach Start ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Serach Start ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="/" class="active">Home</a></li>
                      <li class="scroll-to-section"><a href="/">Services</a></li>
                      <li class="scroll-to-section"><a href="/">Courses</a></li>
                      <li class="scroll-to-section"><a href="/">Team</a></li>
                      <li class="scroll-to-section"><a href="/">Events</a></li>
                      <li class="scroll-to-section"><a href="/">Register Now!</a></li>
                  </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

<section class="vh-100">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 text-black">

          {{-- <div class="px-5 ms-xl-4">
            <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
            <span class="h1 fw-bold mb-0">Logo</span>
          </div> --}}

          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

            <form style="width: 23rem;" action="{{ route('auth.register') }}" method="POST">
                @csrf

              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Registrasi</h3>

              <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form2Example18">Alamat Email</label>
                <input type="email" id="form2Example18" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email" placeholder="name@example.com" />
                @error('email')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
              </div>

              <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form2Example18">Nama Kamu</label>
                <input type="text" id="form2Example18" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" name="name" placeholder="masukkan nama" />
                @error('name')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
              </div>

              <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form2Example28">Password</label>
                <input type="password" id="form2Example28" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required/>
                @error('password')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
              </div>

              <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form2Example28">Confirmasi Password</label>
                <input type="password" id="form2Example28" class="form-control @error('confirm-password') is-invalid @enderror" name="confirm-password" id="confirm-password" placeholder="confirm-password" required/>
                @error('confirm-password')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
              </div>

              <div class="pt-1 mb-4">
                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-lg btn-block" type="submit">Registrasi</button>
              </div>

              <p>Sudah punya akun? <a href="/login" class="link-info">Login Disini</a></p>

            </form>

          </div>

        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="{{ asset('assets/produk/background.png') }}"
            alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
        </div>
      </div>
    </div>
  </section>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('home/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('home/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('home/assets/js/isotope.min.js') }}"></script>
  <script src="{{ asset('home/assets/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('home/assets/js/counter.js') }}"></script>
  <script src="{{ asset('home/assets/js/custom.js') }}"></script>

  </body>
</html>
