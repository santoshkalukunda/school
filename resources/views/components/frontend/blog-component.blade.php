<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Blog</h1>
        </div>
        <div class="row g-4">
            @forelse($posts as $post)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">

                    <div class="classes-item">
                        <div class="bg-light  w-75 mx-auto p-3">
                            <img class="img-fluid "
                                src="{{$post->feature_image ? asset('storage/' . $post->feature_image) : asset('assets/img/no-image.png') }}"
                                alt="{{ $post->title }}">
                        </div>
                        <div class="bg-light rounded p-4 pt-5 mt-n5">
                            <a class="d-block text-center h3 mt-3 mb-4"
                                href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                            <div class="align-items-center justify-content-between mb-4">
                                <div class="align-items-center">
                                    {!! Str::limit(($post->descriptions), 150, $end = '...') !!}
                                </div>
                                <a class="bg-primary text-white rounded-pill py-2 px-3"
                                    href="{{ route('posts.show', $post) }}">View More</a>
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
