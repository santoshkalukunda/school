@extends('frontend.layouts.app', ['title' => $post->title])

@section('content')
    <style>
        p {
            text-align: justify;
        }
    </style>
    <section class="section-bg">
        <div class="container">

            <div class="section-title">
                <h2 class="text-capitalize">{{ $post->title }}</h2>
                <p class="text-center">
                    @foreach ($post->categories as $category)
                        <span class="">{{ $category->name }}</span>
                        {{ $loop->last ? '' : '|' }}
                    @endforeach
                </p>
            </div>

            <div class="container">
                <div class="row">
                    @if ($post->feature_image)
                        <div class="col-md-12">
                            <img class="feature-img"
                                src="{{ $post->feature_image ? asset('storage/' . $post->feature_image) : asset('assets/img/no-image.png') }}">
                        </div>
                    @endif
                    @if ($post->descriptions)
                        <div class="col-md-12 mt-4">
                            <p>
                                {!! $post->descriptions !!}
                            </p>
                        </div>
                    @endif
                    @if ($post->documents->isnotempty())
                        <div class="col-md-12 my-5">
                            <h5 style="color: #d9251a;">Related Documents:</h5>
                            <ul class="list-group list-group-flush">
                                @foreach ($post->documents as $postDocument)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <h6><i class="far fa-file-alt"></i> {{ $postDocument->name }}</h6>
                                        <span class="btn btn-sm btn-success">
                                            <a href="{{ asset('storage/' . $postDocument->file) }}"
                                                class="text-white text-xl" target="_blank"><i
                                                    class="fas fa-cloud-download-alt"></i> Dwonload</a>
                                        </span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
