<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Our Feature</h1>
            <p>
                Experience a fulfilling and enriching life at {{ appSettings('site_name') }}. With our student-centered
                approach, modern facilities, strong literacy program, and value-based education, our students are
                prepared to thrive in a rapidly changing world while respecting core values and traditions.
            </p>
        </div>

        <div class="row g-4">
            @foreach ($ourFeatures as $ourFeature)
            @php
                $i=0.1;
            @endphp
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="{{$i=$i+0.3}}s">
                    <a href="{{ route('posts.show', $ourFeature) }}">
                        <div class="facility-item">
                            <div class="facility-icon bg-primary">
                                <span class="bg-success"></span>

                                <img src="{{ asset('storage/' . $ourFeature->feature_image) ?? asset('assets/img/no-image.png') }}"
                                    alt="{{ $ourFeature->title }}">
                                <span class="bg-success"></span>

                            </div>
                            <div class="facility-text bg-primary">
                                <h3 class="text-primary mb-3">{{ $ourFeature->title }}</h3>
                                <p class="mb-0">
                                    {!! Str::limit($ourFeature->descriptions, 90, $end = '...') !!}
                                </p>
                            </div>

                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
