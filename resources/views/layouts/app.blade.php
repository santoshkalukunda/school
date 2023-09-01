<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} | {{ $title ?? '' }}</title>
    <!-- Favicon -->
    <link href="{{ appSettings('logo') ? asset('storage/' . appSettings('logo')) : asset('assets/img/no-image.png') }}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Extra details for Live View on GitHub Pages -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Icons -->
    <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/nepali-date-picker@2.0.1/dist/nepaliDatePicker.min.css"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />


    <link href="{{ asset('assets/snackbar/snackbar.min.css') }}" rel="stylesheet">
    <style>
        label.required:after {
            content: ' *';
            color: #fa5661;
        }

        .carousel-image {
            border: 1px solid #ddd;
            padding: 2px;
            /* width: 700px; */
            height: 300px;
            object-fit: fill;
            position: relative;
            /* margin: 20px; */
        }

        .feature-image {
            border: 1px solid #ddd;
            padding: 2px;
            max-width: 230px;
            height: 150px;
            object-fit: fill;
            position: relative;
            /* margin: 20px; */
        }

        .feature-image-thum {
            border: 1px solid #ddd;
            padding: 2px;
            width: 120px;
            height: 80px;
            object-fit: cover;
            position: relative;
            margin: 2px;
        }

        .profile {
            border: 1px solid #ddd;
            border-radius: 50%;
            padding: 2px;
            width: 200px;
            height: 200px;
            object-fit: cover;
            position: relative;
            margin: 20px;
        }

        .profile-nav {
            border: 1px solid #ddd;
            border-radius: 50%;
            padding: 2px;
            width: 40px;
            height: 40px;
            object-fit: cover;
            position: relative;
            margin: 2px;
        }
    </style>
    @stack('styles')
</head>

<body class="{{ $class ?? '' }}">
    @include('alerts.all')
    @auth()
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @include('layouts.navbars.sidebar')
    @endauth

    <div class="main-content">
        @include('layouts.navbars.navbar')
        @include('layouts.headers.cards')
        @yield('content')
        @include('layouts.footers.auth')
    </div>

    @guest()
        @include('layouts.footers.guest')
    @endguest

    <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Argon JS -->
    <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
    <!-- this should go after your </body> -->
    <script src="https://unpkg.com/nepali-date-picker@2.0.1/dist/jquery.nepaliDatePicker.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/snackbar/snackbar.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/scripts.js') }}"></script>
    <script>
        $('#summernote').summernote({
            placeholder: 'Descriptions',
            tabsize: 2,
            height: 300
        });
    </script>
    <script>
        $('.select2').select2({
            placeholder: 'Choose',
            theme: "bootstrap-5",
            // placeholder: 'Vendor Select',
        });
    </script>
    @stack('scripts')
</body>

</html>
