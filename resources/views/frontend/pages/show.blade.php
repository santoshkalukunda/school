@extends('frontend.layouts.app')

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
                    <h2>{{ $page->title }}</h2>
                </div>
                {{-- <div class="col-12">
                    @foreach ($page->categories as $category)
                        <span class="badge badge-warning">{{ $category->name }}</span>
                        {{ $loop->last ? '' : '|' }}
                    @endforeach
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- About Start -->
    <div class="container">
        <div class="row">
            @if ($page->feature_image)
                <div class="col-md-12">
                    <img class="feature-img"
                        src="{{ $page->feature_image ? asset('storage/' . $page->feature_image) : asset('assets/img/no-image.png') }}">
                </div>
            @endif
            @if ($page->descriptions)
                <div class="col-md-12 mt-4">
                    <p>
                        {!! $page->descriptions !!}
                    </p>
                </div>
            @endif
            @if ($page->pageDocuments->isnotempty() )
                <div class="col-md-12 mt-4">
                    <h3>Related Documents:</h3>
                    <ul class="list-group list-group-flush">
                        @foreach ($page->pageDocuments as $pageDocument)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <h5><i class="far fa-file-alt"></i> {{ $pageDocument->name }}</h5>
                                <span class="badge badge-lx badge-warning badge-pill">
                                    <a href="{{ asset('storage/' . $pageDocument->file) }}" class="text-white text-xl"
                                        target="_blank"><i class="fas fa-cloud-download-alt"></i> Dwonload</a>
                                </span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
    <!-- About End -->
@endsection
