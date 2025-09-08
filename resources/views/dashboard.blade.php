<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 text-dark fw-semibold mb-0">
            {{ __('Iwak') }}
        </h2>
    </x-slot>

    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Datatables (optional) -->
    @stack('plugin-css')

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('Templateproject/assets/css/my-task.style.min.css') }}">

    <!-- SweetAlert2 -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.22.3/dist/sweetalert2.min.css" rel="stylesheet">