@extends('frontend.layouts.app', ['title' => 'Photo Gallery'])

@section('content')
    <div style="margin-top: 25px;">
        <x-frontend.photo-gallery-list />
    </div>
@endsection
