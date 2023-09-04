@foreach ($carouselImages as $carouselImage)
    <div class="carousel-item {{$loop->first ? "active" : ""}} "
        style="background-image: url({{ $carouselImage->image ? asset('storage/' . $carouselImage->image) : asset('assets/img/no-image.png') }})">
        <div class="carousel-container">
            <div class="container">
                <h2 class="animate__animated animate__fadeInDown">{{ $carouselImage->title }}</span></h2>
                <p class="animate__animated animate__fadeInUp">{!! $carouselImage->descriptions !!}</p>
                @if ($carouselImage->url)
                    <a href="{{ $carouselImage->url }}"
                        class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                        More</a>
                @endif
            </div>
        </div>
    </div>
@endforeach
