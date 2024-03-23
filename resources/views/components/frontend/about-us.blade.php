<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-3">{{ $aboutUs->title }}</h1>
                @if (Request::is('/'))
                    <p>
                        {!! Str::limit($aboutUs->descriptions, 900, $end = '...') !!}
                    </p>
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6">
                            @if (strlen($aboutUs->descriptions) >= 200)
                                <a href="{{ route('pages.show', 'about-us') }}"
                                    class="btn btn-primary rounded-pill py-3 px-5" href="">Read More</a>
                            @endif
                        </div>

                    </div>
                @else
                {!! $aboutUs->descriptions!!}
                @endif

            </div>
            <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-12 text-center">
                        <img class="img-fluid w-75 bg-light p-3"
                            src="{{ asset('storage/' . $aboutUs->feature_image) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
