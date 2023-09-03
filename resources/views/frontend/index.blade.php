@extends('frontend.layouts.app',['title'=> appSettings('tagline')])

@section('content')
    <!-- Carousel Start -->
    @include('frontend.layouts.carousel')


   <!-- partners Start -->
   @include('frontend.layouts.partners')
   <!-- partners End -->
   
    <!-- Team Start -->
    @include('frontend.layouts.team')

    <!-- Team End -->


    <!-- Volunteer Start -->

    <!-- Volunteer End -->
    {{-- 
    <!-- Volunteer Start -->
    @include('frontend.layouts.volunteer')
    <!-- Volunteer End --> --}}


 


    {{-- <!-- Blog Start -->
        @include('frontend.layouts.blog')
        <!-- Blog End --> --}}

    
    <x-frontend.modal-image-view />
@endsection
