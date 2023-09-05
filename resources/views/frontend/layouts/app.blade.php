<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ config('app.name') }} | {{ $title ?? '' }}</title>
    <meta content="Organization, organization Nepal, Nepal,Fayanepal, ORG Nepal, Dhangadhi, Sudurpashim Province"
        name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{ appSettings('logo') ? asset('storage/' . appSettings('logo')) : asset('assets/img/no-image.png') }}"
        rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
    <style>
        .feature-img {
            border: 1px solid #ddd;
            width: 100%;
            max-height: 100vh;
            object-fit: fill;
            position: relative;
        }

        .feature-image {
            max-height: 180px;
            object-fit: cover;
            position: relative;
            /* margin: 20px; */
        }

        .teams-image {
            border: 1px solid #ddd;
            padding: 2px;
            width: 300px;
            height: 300px;
            object-fit: cover;
            position: relative;
            /* margin: 20px; */
        }

        .partner-image {
            max-width: 100px;
            max-height: 80px;
            object-fit: fill;
            /* position: relative; */
            /* margin: 20px; */
        }

        .sliding-image {
            max-height: 100vh;
            object-fit: fill;
        }

        .card-hover:hover {
            box-shadow: 1px 8px 20px grey;
            -webkit-transition: box-shadow .2s ease-in;
        }

        .profile {
            border: 1px solid #ddd;
            border-radius: 50%;
            padding: 2px;
            width: 300px;
            height: 300px;
            object-fit: cover;
            position: relative;
        }
    </style>
     @stack('styles')

</head>

<body>

    <!-- ======= Top Bar ======= -->
    @include('frontend.layouts.top-bar')

    <!-- ======= Header ======= -->
    @include('frontend.layouts.nav')
    <!-- End Header -->
    @yield('content')
    <!-- ======= Footer ======= -->
    @include('frontend.layouts.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>
