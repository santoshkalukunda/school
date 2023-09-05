@extends('frontend.layouts.app', ['title' => $team->name])

@section('content')
    <style>
        p {
            text-align: justify;
        }
    </style>
    <section class="section-bg">
        <div class="container">

            <div class="section-title">
                <h2 class="text-capitalize">{{ $team->name }}</h2>
                <p class="text-center">
                    {{ $team->designation }}
                </p>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img id="newProfilePhotoPreview"
                            src="{{ $team->photo ? asset('storage/' . $team->photo) : asset('assets/img/dummy-profile.png') }}"
                            class="profile">
                        <h4>{{ $team->name }}</h4>
                        <span class="badge badge-warning text-white">{{ $team->designation }}</span>
                    </div>
                    <div class="col-md-8">
                        <h4>Details Infromations</h4>
                        <hr>
                        <div class="row">
                            <div class="col-3">
                                <b>Name</b>
                            </div>
                            <div class="col-9">
                                : {{ $team->name }}
                            </div>
                            <div class="col-12">
                                <hr>
                            </div>
                            @if ($team->designation)
                                <div class="col-3">
                                    <b>Designation</b>
                                </div>
                                <div class="col-9">
                                    : {{ $team->designation }}
                                </div>
                                <div class="col-12">
                                    <hr>
                                </div>
                            @endif
                            @if ($team->address)
                                <div class="col-3">
                                    <b>Address</b>
                                </div>
                                <div class="col-9">
                                    : {{ $team->address }}
                                </div>
                                <div class="col-12">
                                    <hr>
                                </div>
                            @endif
                            @if ($team->email)
                                <div class="col-3">
                                    <b>Email</b>
                                </div>
                                <div class="col-9">
                                    : {{ $team->email }}
                                </div>
                                <div class="col-12">
                                    <hr>
                                </div>
                            @endif
                            @if ($team->phone)
                                <div class="col-3">
                                    <b>Phone</b>
                                </div>
                                <div class="col-9">
                                    : {{ $team->phone }}
                                </div>
                                <div class="col-12">
                                    <hr>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
