<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }} | {{ $title ?? '' }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Organization, organization Nepal, Nepal, ORG Nepal, Dhangadhi, Sudurpashim Province" name="keywords">
    <meta content="Sustainable enterprise and Environment Development Working Awareness Centre (SEEWAC) Nepal" name="description">

    <!-- Favicon -->
    <link href="{{ appSettings('logo') ? asset('storage/' . appSettings('logo')) : asset('assets/img/no-image.png') }}" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/lib/flaticon/font/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <style>
        .feature-img {
            border: 1px solid #ddd;
            max-width: 100%;
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
            /* border-radius: 50%; */
            padding: 2px;
            width: 350px;
            height: 350px;
            object-fit: cover;
            position: relative;
        }
    </style>
    @stack('styles')

</head>

<body>
    <!-- Top Bar Start -->
    @include('frontend.layouts.top-nav')
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    @include('frontend.layouts.nav')

    <!-- Nav Bar End -->

    @yield('content')

    <!-- Footer Start -->
    @include('frontend.layouts.footer')
    <!-- Footer End -->

    <!-- Back to top button -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Pre Loader -->
    <div id="loader" class="show">
        <div class="loader"></div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/lib/parallax/parallax.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @stack('scripts')
</body>

</html>
