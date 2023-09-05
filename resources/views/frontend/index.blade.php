@extends('frontend.layouts.app', ['title' => appSettings('tagline')])

@section('content')
    <!-- ======= Hero Section ======= -->
    @include('frontend.layouts.carousel')
    <!-- End Hero -->

    <main id="main">
        {{-- <!-- ======= Featured Services Section ======= -->
        @include('frontend.layouts.feature')

        <!-- End Featured Services Section --> --}}

        <!-- ======= About Us Section ======= -->
        @include('frontend.layouts.about')
        <!-- End About Us Section -->

        {{-- <!-- ======= Why Us Section ======= -->
        @include('frontend.layouts.why-us')
        <!-- End Why Us Section --> --}}

        <!-- ======= Our partners Section ======= -->
        @include('frontend.layouts.partners')
        <!-- End Our partners Section -->


        {{-- <!-- ======= Portfolio Section ======= -->
        @include('frontend.layouts.portfolio')
        <!-- End Portfolio Section --> --}}

        <!-- ======= Team Section ======= -->
        {{-- @include('frontend.layouts.teams') --}}
        <!-- End Team Section -->

        {{-- <!-- ======= Contact Section ======= -->
        @include('frontend.layouts.contact')
        <!-- End Contact Section --> --}}
        <x-frontend.modal-image-view />
    </main><!-- End #main -->
@endsection
