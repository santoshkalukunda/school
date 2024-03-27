<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-3">Why Choose us?</h1>
        </div>
        <div class="row g-4">
            @forelse($posts as $post)
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">

                    <div class="classes-item">
                        <div class="card mb-3 bg-light">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ $post->feature_image ? asset('storage/' . $post->feature_image) : asset('assets/img/no-image.png') }}"
                                        alt="{{ $post->title }}" class="img-fluid rounded-start" style="max-height: 140px;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $post->title }}</h5>
                                        <p class="card-text">{!! $post->descriptions !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-primary text-center">
                    {{ $category->name }} not found !!!
                </div>
            @endforelse
        </div>
    </div>
</div>
