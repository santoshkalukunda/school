@extends('frontend.layouts.app',['title'=>  $category->name ])

@section('content')
    <style>
        p {
            text-align: justify;
        }
    </style>
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>{{ $category->name }}</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- About Start -->
    <div class="container">
        <div class="row g-2 justify-content-center">
            @forelse ($category->posts as $post)
                <div class="col-md-4">
                    <a href="{{ route('posts.show', $post) }}">
                        <div class="card card-hover">
                            <img src="{{ $post->feature_image ? asset('storage/' . $post->feature_image) : asset('assets/img/no-image.png') }}"
                                alt="{{ $post->title }}" class="feature-image">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize">{{ $post->title }}</h5>
                                <p class="card-text">
                                    {{ Str::limit(strip_tags($post->descriptions), 100, $end = '...') }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
            <div class="col-md-12 text-center">
                <div class="text-warning">:) Not available !!!</div>
            </div>
            @endforelse
        </div>
    </div>
    <!-- About End -->
@endsection
