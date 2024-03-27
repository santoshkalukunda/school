@extends('frontend.layouts.app', ['title' => 'About Us'])
@section('content')
    <x-frontend.about-us />
    <x-frontend.page-component :page="2" />
    <x-frontend.page-component :page="3" />
    <x-frontend.page-component :page="4" />
    <x-frontend.page-component :page="5" />
    <x-frontend.page-component :page="6" />
@endsection
