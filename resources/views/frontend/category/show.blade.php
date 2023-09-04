@extends('frontend.layouts.app', ['title' => $category->name])

@section('content')
    <style>
        p {
            text-align: justify;
        }
    </style>
    <section class="services section-bg">
        <div class="container">

            <div class="section-title">
                <h2 class="text-capitalize">{{ $category->name }}</h2>
            </div>

            <div class="row">
                @forelse ($category->posts as $post)
                    <div class="col-md-4">
                        <a href="{{ route('posts.show', $post) }}">
                            <div class="card card-hover">
                                <img src="{{ $post->feature_image ? asset('storage/' . $post->feature_image) : asset('assets/img/no-image.png') }}"
                                    alt="{{ $post->title }}" class="feature-image">
                                <div class="card-body">
                                    <h5 class="card-title text-capitalize" style="color: #d9251a">{{ $post->title }}</h5>
                                    <p class="card-text">
                                        {{ Str::limit(strip_tags($post->descriptions), 100, $end = '...') }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-md-12 text-center">
                        <div class="text-danger">:) Not available !!!</div>
                    </div>
                @endforelse
            </div>

        </div>
    </section>
@endsection
