<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center bg-black">

    <div class="d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/produk/logo.png') }}" alt="">
        {{-- <span class="d-none d-lg-block">SCHIZO</span> --}}
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    @php
        use Illuminate\Support\Facades\Auth;
        $admin = Auth::user();
    @endphp
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ $admin->name }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ $admin->name }}</h6>
              <span>{{ $admin->email }}</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/dashboard">
          <i class="bi bi-house"></i>
          <span>Dashboard</span>
        </a>
      </li>{{-- End Dashboard Nav --}}

      <li class="nav-heading">Katalog</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/produk">
          <i class="bi bi-grid"></i>
          <span>Produk</span>
        </a>
      </li>{{-- End Produk Nav --}}

      <li class="nav-item">
        <a class="nav-link collapsed" href="/pesanan">
          <i class="ri-archive-line"></i>
          <span>Pesanan</span>
        </a>
      </li>{{-- End Produk Nav --}}

      {{-- <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav --> --}}

    </ul>

  </aside><!-- End Sidebar-->