<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
	<title>SAASCO - Admin Dashboard</title>

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

</head>
<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black" data-headerbg="color_1">

    <!--*******************
        Preloader start
    ********************-->
    {{-- @include('body.preloader') --}}
    @include('dashboard.master.preloader')
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        {{-- @include('body.navheader') --}}
        @include('dashboard.master.navheader')
        <!--**********************************
            Nav header end
        ***********************************-->

		<!--**********************************
            Chat box start
        ***********************************-->
		{{-- @include('body.chatbox') --}}
		@include('dashboard.master.chatbox')
		<!--**********************************
            Chat box End
        ***********************************-->

		<!--**********************************
            Header start
        ***********************************-->
		{{-- @include('body.header') --}}
		@include('dashboard.master.header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
		{{-- @include('body.sidebar') --}}
		@include('dashboard.master.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        {{-- @session('status')   {{--La llave es el status: esto me ayuda mostrar mensajes de una acción--}
            {{ $value }}
        @endsession --}}

        {{-- @session('key')
            {{-- {{ $value }} --}
            <h1>{{ $value }}</h1>
        @endsession --}}

        @if (session('status'))   {{--La llave es el status: esto me ayuda mostrar mensajes de una acción---}}
            {{ session('status') }}
        @endif

		<!--**********************************
            Content body start
        ***********************************-->
         @yield('content')
        <!--**********************************
            Content body end
        ***********************************-->

        @include('dashboard.master.offcanvas')

        <!--**********************************
            Footer start
        ***********************************-->
        @include('dashboard.master.footer')
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
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





















{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout> --}}
