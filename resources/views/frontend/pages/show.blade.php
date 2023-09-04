@extends('frontend.layouts.app', ['title' => $page->title])

@section('content')
    <style>
        p {
            text-align: justify;
        }
    </style>
    <section class="section-bg">
        <div class="container">

            <div class="section-title">
                <h2 class="text-capitalize">{{ $page->title }}</h2>
            </div>

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
                    @if ($page->documents->isnotempty())
                        <div class="col-md-12 my-5">
                            <h5 style="color: #d9251a;">Related Documents:</h5>
                            <ul class="list-group list-group-flush">
                                @foreach ($page->documents as $pageDocument)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <h6><i class="far fa-file-alt"></i> {{ $pageDocument->name }}</h6>
                                        <span class="btn btn-sm btn-success">
                                            <a href="{{ asset('storage/' . $pageDocument->file) }}"
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
