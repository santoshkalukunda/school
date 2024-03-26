<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" >
            <h1 class="mb-3">Our Feature</h1>
            <p>
                Experience a fulfilling and enriching life at {{ appSettings('site_name') }}. With our student-centered
                approach, modern facilities, strong literacy program, and value-based education, our students are
                prepared to thrive in a rapidly changing world while respecting core values and traditions.
            </p>
        </div>
        <div class="row g-4">
            @foreach ($ourFeatures as $ourFeature)
            <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.1s">

                <div class="classes-item">
                    <div class="bg-light  w-75 mx-auto p-3">
                        <img class="img-fluid"
                        src="{{$ourFeature->feature_image ? asset('storage/' . $ourFeature->feature_image) : asset('assets/img/no-image.png') }}"
                        alt="{{ $ourFeature->title }}" style="max-height: 150px; width:100%; object-fit:cover">
                    </div>
                    <div class="bg-light rounded p-4 pt-5 mt-n5">
                        <a class="d-block text-center h3 mt-3 mb-4"
                            href="{{ route('posts.show', $ourFeature) }}">{{ $ourFeature->title }}</a>
                        <div class="align-items-center justify-content-between mb-4">
                            <div class="align-items-center">
                                {!! Str::limit(($ourFeature->descriptions), 70, $end = '...') !!}
                            </div>
                            <a class="bg-primary text-white rounded-pill py-2 px-3"
                                href="{{ route('posts.show', $ourFeature) }}">View More</a>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
        <div class="text-center mx-auto mt-4" >
            <a class="bg-primary text-white rounded-pill py-2 px-3"
            href="{{ route('categories.show', $category) }}">View All {{$category->name}}</a>
        </div>
    </div>
</div>
