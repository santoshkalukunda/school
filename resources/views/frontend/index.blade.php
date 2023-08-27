@extends('frontend.layouts.app')

@section('content')
    <!-- Carousel Start -->
    @include('frontend.layouts.carousel')

    <!-- Carousel End -->

    <!-- Video Modal Start-->

    <!-- Video Modal End -->

    @include('frontend.layouts.message-from-chairperson')

    {{-- <!-- About Start -->
    @include('frontend.layouts.about')
    <!-- About End --> --}}


    <!-- Service Start -->
    @include('frontend.layouts.service')
    <!-- Service End -->


    {{-- <!-- Facts Start -->
    @include('frontend.layouts.facts')
    <!-- Facts End --> --}}

    
    <!-- Event Start -->
    @include('frontend.layouts.event')
    <!-- Event End -->

    <!-- Causes Start -->
    @include('frontend.layouts.program')
    <!-- Causes End -->


    <!-- Donate Start -->
    @include('frontend.layouts.donate')

    <!-- Donate End -->





    <!-- Team Start -->
    @include('frontend.layouts.team')

    <!-- Team End -->

  
    <!-- Volunteer Start -->
    
    <!-- Volunteer End --> 
{{-- 
    <!-- Volunteer Start -->
    @include('frontend.layouts.volunteer')
    <!-- Volunteer End --> --}}


    <!-- Testimonial Start -->
    @include('frontend.layouts.testimonial')
    <!-- Testimonial End -->


    <!-- Contact Start -->
    @include('frontend.layouts.contact')
    <!-- Contact End -->


    <!-- Blog Start -->
    @include('frontend.layouts.blog')
    <!-- Blog End -->
@endsection
