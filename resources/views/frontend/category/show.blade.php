@extends('frontend.layouts.app',['title' => $category->name])
@section('content')
    <!--  Start -->
    <x-frontend.post-component :category="$category" />
    <!-- About End -->
@endsection
