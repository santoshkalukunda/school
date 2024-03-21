@extends('frontend.layouts.app', ['title' => $page->title])
@section('content')
    <!--  Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">{{ $page->title }}</h1>
                {{-- <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p> --}}
            </div>
            <div class="row g-5 justify-content-center">
                @if ($page->feature_image)
                    <div class="col-lg-8 about-img wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img class="img-fluid" style="max-height: 80vh;"
                                    src="{{ asset('storage/' . $page->feature_image) }}" alt="{{ $page->title }}">
                            </div>
                        </div>
                    </div>
                @endif
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <p>
                        {!! $page->descriptions !!}
                    </p>
                </div>

            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
