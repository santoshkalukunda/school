@foreach ($carouselImages as $carouselImage)
    <div class="owl-carousel-item position-relative">
        <img class="img-fluid"
            src="{{ $carouselImage->image ? asset('storage/' . $carouselImage->image) : asset('assets/img/no-image.png') }}"
            alt="">
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
            style="background: rgba(0, 0, 0, .2);">
            <div class="container">
                <div class="row justify-content-start">
                    <div class="col-10 col-lg-8">
                        <h1 class="display-2 text-white animated slideInDown mb-4">
                            {{ $carouselImage->title }}
                        </h1>
                        <p class="fs-5 fw-medium text-white mb-4 pb-2">
                            {!! $carouselImage->descriptions !!}
                        </p>
                        @if ($carouselImage->url)
                            <a href="{{ $carouselImage->url }}"
                                class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Learn
                                More</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
