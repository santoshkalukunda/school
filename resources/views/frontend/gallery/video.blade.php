@extends('frontend.layouts.app', ['title' => 'Video Gallery'])

@section('content')
    <div style="margin-top: 20px;">
        <x-frontend.video-gallery-list />

    </div>
@endsection
