@extends('frontend.layouts.app', ['title' => 'Home'])
@section('content')
    <!-- Carousel Start -->
    @include('frontend.layouts.carousel')
    <!-- Carousel End -->


    <!-- our-feature Start -->
    <x-frontend.our-feature />
    <!-- our-feature End -->


    <!-- About Start -->
    <x-frontend.about-us />
    <!-- About End -->


    <!-- Call To Action Start -->
    {{-- @include('frontend.layouts.action') --}}

    <!-- Call To Action End -->


    <!-- event Start -->
    <x-frontend.event-component />
    <!-- event End -->

    <!-- Testimonial Start -->
    @include('frontend.layouts.testimonial')
    <!-- Testimonial End -->

    <!-- blog Start -->
    <x-frontend.blog-component />
    <!-- blog End -->




    <!-- Team Start -->
    {{-- @include('frontend.layouts.team') --}}
    <!-- Team End -->
@endsection
