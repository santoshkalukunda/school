@extends('frontend.layouts.app', ['title' => $post->title])
@section('content')
    {{-- <!-- post Header End -->
    <div class="container-xxl py-5 post-header position-relative mb-5">
        <div class="container py-5">
            <h1 class="display-2 text-white animated slideInDown mb-4">{{$post->title}}</h1>
        </div>
    </div>
    <!-- post Header End --> --}}


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">{{ $post->title }}</h1>
                {{-- <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p> --}}
            </div>
            <div class="row g-5 justify-content-center">
                @if ($post->feature_image)
                    <div class="col-lg-8 about-img wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img class="img-fluid" style="max-height: 80vh;"
                                    src="{{ asset('storage/' . $post->feature_image) }}" alt="{{ $post->title }}">
                            </div>
                        </div>
                    </div>
                @endif
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <p>
                        {!! $post->descriptions !!}
                    </p>
                </div>

            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
