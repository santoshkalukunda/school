@extends('frontend.layouts.app', ['title' => $teamType->name])

@section('content')
    <style>
        p {
            text-align: justify;
        }
    </style>
    <section class="team section-bg">
        <div class="container">

            <div class="section-title">
                <h2 class="text-capitalize">{{ $teamType->name }}</h2>
            </div>

            <div class="row">
                @forelse ($teamType->teams as $team)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="{{ $team->photo ? asset('storage/' . $team->photo) : asset('assets/img/dummy-profile.png') }}"
                                alt="{{ $team->name }}" class="profile">
                            <h4>{{ $team->name }}</h4>
                            <span>{{ $team->designation }}</span>
                            <div class="text-center">
                                <a href="{{ route('teams.show', $team) }}">View</a>
                            </div>
                            {{-- <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div> --}}
                        </div>
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
