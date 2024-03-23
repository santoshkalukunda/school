<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            @if ($page->feature_image)
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-3">{{ $page->title }}</h1>
                    {!! $page->descriptions !!}
                </div>
                <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img class="img-fluid w-75 rounded-circle bg-light p-3"
                                src="{{ asset('storage/' . $page->feature_image) }}" alt="">
                        </div>
                    </div>
                </div>
            @else
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-3">{{ $page->title }}</h1>
                    {!! $page->descriptions !!}
                </div>
            @endif
        </div>
    </div>
</div>
