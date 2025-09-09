<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>:: My-Task :: @yield('title', 'Employee Dashboard')</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Project CSS -->
    <link rel="stylesheet" href="{{ asset('Templateadmin/assets/css/my-task.style.min.css') }}">
    @yield('styles')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body data-mytask="theme-indigo">
    <div id="mytask-layout">

        <!-- Sidebar -->
        <div class="sidebar px-4 py-4 py-md-5 me-0">
            <div class="d-flex flex-column h-100">
                <a href="{{ url('/') }}" class="mb-0 brand-icon">
                    <span class="logo-icon">
                        <svg width="35" height="35" fill="currentColor" class="bi bi-clipboard-check"
                             viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10.854 7.146a.5.5..."></path>
                            <path d="M4 1.5H3a2..."></path>
                            <path d="M9.5 1a.5.5..."></path>
                        </svg>
                    </span>
                    <span class="logo-text">My-Task</span>
                </a>

                {{-- Sidebar dummy --}}
                @include('partial.sidebar')

                <button type="button" class="btn btn-link sidebar-mini-btn text-light">
                    <i class="icofont-bubble-right ms-2"></i>
                </button>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main px-lg-4 px-md-4">

            <!-- Header -->
<!-- Body: Header -->
<div class="header">
  <nav class="navbar navbar-expand-lg py-4">
    <div class="container-xxl">

      <!-- Title kiri (tampil besar di desktop, pindah ke brand saat mobile) -->
      <h1 class="mb-0 d-none d-lg-block">@yield('title', 'Dashboard')</h1>
      <a class="navbar-brand d-lg-none" href="{{ url('/') }}">@yield('title', 'Dashboard')</a>

      <!-- Toggler (hamburger) -->
      <button class="navbar-toggler border-0 order-3" type="button"
              data-bs-toggle="collapse" data-bs-target="#mainHeader"
              aria-controls="mainHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span>
      </button>

      <!-- Kanan: dibungkus collapse agar toggler berfungsi -->
      <div class="collapse navbar-collapse justify-content-end" id="mainHeader">
        <ul class="navbar-nav align-items-center ms-auto">

          <!-- 🔔 Notifications dropdown -->
          <li class="nav-item dropdown me-3">
            <a class="nav-link dropdown-toggle position-relative" href="#" id="notifDropdown"
               role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="icofont-alarm fs-5"></i>
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="notifDropdown">
              <li><h6 class="dropdown-header">Notifications</h6></li>
              <li><a class="dropdown-item" href="#">Notifikasi 1</a></li>
              <li><a class="dropdown-item" href="#">Notifikasi 2</a></li>
              <li><a class="dropdown-item" href="#">Notifikasi 3</a></li>
            </ul>
          </li>

          <!-- 👤 User dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown"
               role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <div class="text-end me-2">
                <div class="fw-bold small mb-0">{{ Auth::check() ? Auth::user()->name : 'Guest' }}</div>
                <small class="text-muted">{{ Auth::check() ? 'Admin Profile' : 'Please login' }}</small>
              </div>
              <img class="avatar lg rounded-circle img-thumbnail"
                   src="{{ asset('Templateadmin/assets/images/profile_av.png') }}" alt="profile">
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="userDropdown">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
              </li>
            </ul>
          </li>

          <!-- ⚙️ Settings icon (optional offcanvas) -->
          <li class="nav-item ms-3">
            <a class="nav-link" href="#offcanvas_setting" data-bs-toggle="offcanvas" aria-controls="offcanvas_setting">
              <i class="icofont-gear-alt fs-5"></i>
            </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
</div>


            <!-- Body -->
            <div class="body d-flex py-3">
                <div class="container-xxl">
                    @yield('content')
                </div>
            </div>

            <!-- Dummy Modal -->
            <div class="modal fade" id="dummyModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header"><h5 class="modal-title">Dummy Modal</h5></div>
                        <div class="modal-body">Isi dummy modal di sini</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('Templateadmin/assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('Templateadmin/assets/bundles/apexcharts.bundle.js') }}"></script>
    <script src="{{ asset('Templateadmin/js/template.js') }}"></script>
    <script src="{{ asset('Templateadmin/js/page/hr.js') }}"></script>
    @yield('scripts')
</body>
</html>
