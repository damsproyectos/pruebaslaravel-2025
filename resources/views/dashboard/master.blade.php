<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="index, follow">
	<meta name="format-detection" content="telephone=no">

	<meta name="keywords" content="admin, admin dashboard, bootstrap, template, analytics, dark mode, modern, responsive admin dashboard, sass, ui kit">
	<meta name="description" content="Elevate your administrative efficiency and enhance productivity with the W3CRM Bootstrap Admin Dashboard Template. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.">

	<meta property="og:title" content="W3CRM - Bootstrap Admin Dashboard Template">
	<meta property="og:description" content="Elevate your administrative efficiency and enhance productivity with the W3CRM Bootstrap Admin Dashboard Template. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.">
	<meta property="og:image" content="https://w3crm.dexignzone.com/xhtml/social-image.png">
    <!-- TWITTER META -->
	<meta name="twitter:title" content="W3CRM - Bootstrap Admin Dashboard Template">
	<meta name="twitter:description" content="Elevate your administrative efficiency and enhance productivity with the W3CRM Bootstrap Admin Dashboard Template. Designed to streamline your tasks, this powerful tool provides a user-friendly interface, robust features, and customizable options, making it the ideal choice for managing your data and operations with ease.">
	<meta name="twitter:image" content="https://w3crm.dexignzone.com/xhtml/social-image.png">
	<meta name="twitter:card" content="summary_large_image">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('dashboard/assets/images/favicon.png') }}">

    <!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('dashboard/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
	<link href="{{ asset('dashboard/assets/vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css">
	<link href="{{ asset('dashboard/assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
	<link href="{{ asset('dashboard/assets/vendor/jvmap/jquery-jvectormap.css') }}" rel="stylesheet">
	<link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
	<link href="{{ asset('dashboard/assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">

	<!-- tagify-css -->
	<link href="{{ asset('dashboard/assets/vendor/tagify/dist/tagify.css') }}" rel="stylesheet">

	<!-- Style css -->
   <link href="{{ asset('dashboard/assets/css/style.css') }}"     rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{-- {{ $slot }} --}}

                <!--**********************************
            Sidebar start
        ***********************************-->
		{{-- @include('body.sidebar') --}}
		@include('dashboard.master.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->



              <div class="container mx-auto px-4 card card-white">
                    @if (session('status'))   {{--La llave es el status: esto me ayuda mostrar mensajes de una acción---}}
                        <div class="card card-success px-4 py-4">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- <div class="card card-white"> --}}
                    <!--**********************************
                        Content body start
                    ***********************************-->
                    @yield('content')
                    <!--**********************************
                        Content body end
                    ***********************************-->
                    {{-- </div> --}}
              </div> <!----End "container mx-auto"----->

                <!--**********************************
            Footer start
        ***********************************-->
        @include('dashboard.master.footer')
        <!--**********************************
            Footer end
        ***********************************-->
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        <!-- Required vendors -->
    <script src="{{ asset('dashboard/assets/vendor/global/global.min.js') }}"></script>
	<script src="{{ asset('dashboard/assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
	<script src="{{ asset('dashboard/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('dashboard/assets/vendor/apexchart/apexchart.js') }}"></script>

	<!-- Dashboard 1 -->
	<script src="{{ asset('dashboard/assets/js/dashboard/dashboard-1.js') }}"></script>
	<script src="{{ asset('dashboard/assets/vendor/draggable/draggable.js') }}"></script>


	<!-- tagify -->
	<script src="{{ asset('dashboard/assets/vendor/tagify/dist/tagify.js') }}"></script>

	<script src="{{ asset('dashboard/assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('dashboard/assets/vendor/datatables/js/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('dashboard/assets/vendor/datatables/js/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('dashboard/assets/vendor/datatables/js/jszip.min.js') }}"></script>
	<script src="{{ asset('dashboard/assets/js/plugins-init/datatables.init.js') }}"></script>

	<!-- Apex Chart -->

	<script src="{{ asset('dashboard/assets/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
	<script src="{{ asset('dashboard/assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>


	<!-- Vectormap -->
    <script src="{{ asset('dashboard/assets/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/jqvmap/js/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/custom.js') }}"></script>
	<script src="{{ asset('dashboard/assets/js/deznav-init.js') }}"></script>
    </body>
</html>
