@extends('layouts.app', ['class' => 'bg-default'])

@section('content')

    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <div>
                    <img src="{{ appSettings('logo') ? asset('storage/' . appSettings('logo')) : asset('assets/img/no-image.png') }}"
                        class="logo" alt="{{ appSettings('site_name') }}">
                </div>
                <div class="my-2 text-white">
                    <h1 class="text-white">{{ appSettings('site_name') }}</h1>
                    <div>{{ appSettings('address') }}</div>
                </div>
            </div>
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <small>{{ __('Verify Your Email Address') }}</small>
                        </div>
                        <div>
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                            @endif
                            
                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            
                            @if (Route::has('verification.resend'))
                                {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
