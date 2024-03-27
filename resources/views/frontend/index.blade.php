@extends('frontend.layouts.app', ['title' => 'Home'])
@section('content')
    <!-- Carousel Start -->
    @include('frontend.layouts.carousel')
    <!-- Carousel End -->


    <!-- our-feature Start -->
    <x-frontend.our-feature :category="1" />
    <!-- our-feature End -->


    <!-- About Start -->
    <x-frontend.about-us />
    <!-- About End -->

    <x-frontend.why-choose-us :category="6"/>

    <!-- event Start -->
    <x-frontend.event-component :category="2"/>
    <!-- event End -->

    <!-- what student Say Start -->
   <x-frontend.what-studen-say />
    <!-- what student Say End -->
    <x-frontend.photo-gallery-list />
    <!-- blog Start -->
    <x-frontend.blog-component :category="3" />
    <!-- blog End -->




    <!-- Team Start -->
    {{-- @include('frontend.layouts.team') --}}
    <!-- Team End -->
@endsection
