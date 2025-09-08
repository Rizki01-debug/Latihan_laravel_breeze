<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Datatables (optional) -->
    @stack('plugin-css')

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('Templateproject/assets/css/my-task.style.min.css') }}">

    <!-- SweetAlert2 -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.22.3/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div id="app">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand fw-bold text-primary" href="#">MyShop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Menu -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Daftar Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tentang</a>
                        </li>
                    </ul>

                    <!-- Right Menu -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary ms-2" href="#">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white shadow-sm">
                <div class="container py-3">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main class="container my-4">
            {{ $slot }}
        </main>
    </div>

    <!-- Jquery Core Js -->
    <script src="{{ asset('Templateadmin/assets/bundles/libscripts.bundle.js') }}"></script>

    <!-- Plugin Js-->
    <script src="{{ asset('Templateadmin/assets/bundles/apexcharts.bundle.js') }}"></script>
    @stack('plugins-js')

    <!-- Jquery Page Js -->
    <script src="{{ asset('Templateadmin/js/template.js') }}"></script>
    <script src="{{ asset('Templateadmin/js/page/hr.js') }}"></script>
    @yield('scripts')
</body>
</html>
