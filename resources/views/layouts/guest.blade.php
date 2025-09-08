<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        @push('plugin-css')
    <link rel="stylesheet" href="{{ asset('templateadmin/assets/plugin/datatables/responsive.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templateadmin/assets/plugin/datatables/dataTables.bootstrap5.min.css') }}">
    @endpush

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('Templateproject/assets/css/my-task.style.min.css') }}">

    <!-- SweetAlert2 -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.22.3/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="d-flex flex-column justify-content-center align-items-center min-vh-100">
        <!-- Logo -->
        <div class="mb-4">
            <a href="/">
                <x-application-logo class="text-secondary" style="width: 80px; height: 80px;" />
            </a>
        </div>

        <!-- Card -->
        <div class="card shadow-sm" style="max-width: 420px; width: 100%;">
            <div class="card-body p-4">
                {{ $slot }}
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Jquery Core Js -->
    <script src="{{ asset('Templateproject/assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('Templateproject/assets/bundles/vendorscripts.bundle.js') }}"></script>
</body>
</html>
