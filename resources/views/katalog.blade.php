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
  <header class="header-area header-sticky">
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
                      <li class="scroll-to-section"><a href="/">Home</a></li>
                      <li class="scroll-to-section"><a href="/">Jenis Kain</a></li>
                      <li class="scroll-to-section"><a href="/">Katalog Baju</a></li>
                      <li class="scroll-to-section"><a href="/">Harga</a></li>
                      <li class="scroll-to-section"><a href="/">Events</a></li>
                      <li class="scroll-to-section"><a href="/"><button class="btn btn-danger">Pesan Sekarang!!</button></a></li>
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


  <div id="courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-heading">
                    <h1>Katalog Baju</h1>
                </div>
            </div>
        </div>

        <div class="row event_box">
            @php
            use App\Models\Produk;
            $produks = Produk::orderBy('kategori')->get();
            @endphp

            @foreach($produks as $produk)
            <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design" id="{{ $produk->kategori }}">
                <div class="events_item">
                    <div class="thumb">
                        <a href="/katalog"><img src="{{ asset('storage/produk/' . $produk->image) }}" alt=""></a>
                    </div>
                    <div class="down-content">
                        <h4 class="text-center">{{ $produk->kategori }}</h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2024 M. IqbalC. All rights reserved. &nbsp;&nbsp;&nbsp; Design: <a href="https://templatemo.com" rel="nofollow" target="_blank">TemplateMo</a> Distribution: <a href="https://themewagon.com" rel="nofollow" target="_blank">ThemeWagon</a></p>
      </div>
    </div>
  </footer>

  <div class="body-pesanan elementor-button-sticky-yes elementor-button-wrapper">
      <a data-grc="yes" data-awdata="{&quot;send_to&quot;:&quot;AW-716271965/PUSjCN3SwLEBEN3ixdUC&quot;,&quot;value&quot;:&quot;10000&quot;}" href="https://api.whatsapp.com/send?phone=628562785299&amp;text=Halo%20Zipzap%2C%20saya%20mau%20pesan%20polo%20dengan%20detail%20pemesanan%20%3A%20%0ANama%20%3A%20%0AProduk%3A%0AJumlah%3A%0ADomisili%20%3A%20%0ADeadline%20%3A%0AMohon%20dibantu%20ya%2C%20terimakasih." target="_blank" class="elementor-button-link elementor-button elementor-size-lg elementor-animation-shrink">
        <span class="pemesanan">
            <span class="btn btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                </svg>
                PESAN SEKARANG
            </span>
        </span>
    </a>
</div>

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
