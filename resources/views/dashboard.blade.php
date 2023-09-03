@extends('layouts.app')

@section('content')
    {{-- @include('layouts.headers.cards') --}}

    <div class="container-fluid mt--7">
        <div class="row mb-4">
            <div class="col-md-12 text-center">
                <div>
                    <img src="{{ appSettings('logo') ? asset('storage/' . appSettings('logo')) : asset('assets/img/no-image.png') }}"
                        class="logo" alt="{{ appSettings('site_name') }}">
                </div>
                <div class="my-4">
                    <h1>{{ appSettings('site_name') }}</h1>
                    <div>{{ appSettings('tagline') }}</div>
                    <div>{{ appSettings('address') }}</div>
                    <div>{{ appSettings('email') }}</div>
                    <div>{{ appSettings('phone') }}</div>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
