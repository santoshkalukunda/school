<div class="carousel">
    <div class="container-fluid">
        <div class="owl-carousel">
            @foreach ($carouselImages as $carouselImage)
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{ $carouselImage->image ? asset('storage/' . $carouselImage->image) : asset('assets/img/no-image.png') }}"
                            alt="{{ $carouselImage->title }}">
                    </div>
                    <div class="carousel-text">
                        <h1 class="text-capitalize">{{ $carouselImage->title }}</h1>
                        <p class="text-capitalize">
                            {{ $carouselImage->descriptions }}
                        </p>
                        @if ($carouselImage->url)
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="{{ $carouselImage->url }}">View More</a>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
