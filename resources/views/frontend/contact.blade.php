@extends('frontend.layouts.app', ['title' => 'Contact Us'])
@section('content')
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Get In Touch</h1>
                <p>Get in touch with us easily by filling out our online contact form. Our team will get back to you
                    promptly to address your needs and answer any questions.</p>
            </div>
            <div class="my-2">
                @if (Session::has('success'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{ Session::get('success') }}

                    </div>
                    @push('scripts')
                        <script>
                            $('.alert').alert();
                        </script>
                    @endpush
                @endif
            </div>
            <div class="row g-4 mb-5">
                <div class="col-md-6 col-lg-4 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4"
                        style="width: 75px; height: 75px;">
                        <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
                    </div>
                    <h6>{{ appSettings('address') }}</h6>
                </div>
                <div class="col-md-6 col-lg-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4"
                        style="width: 75px; height: 75px;">
                        <i class="fa fa-envelope-open fa-2x text-primary"></i>
                    </div>
                    <h6>{{ appSettings('email') }}</h6>
                </div>
                <div class="col-md-6 col-lg-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4"
                        style="width: 75px; height: 75px;">
                        <i class="fa fa-phone-alt fa-2x text-primary"></i>
                    </div>
                    <h6>{{ appSettings('phone') }}</h6>
                </div>
            </div>
            <div class="bg-light rounded">
                <div class="row g-0">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100 d-flex flex-column justify-content-center p-5">
                            <form action="{{ route('contact-us.store') }}" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text"
                                                class="form-control border-0 @error('name') is-invalid @enderror"
                                                name="name" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                            <div class="invalid-feedback">
                                                @error('name')
                                                    {{ $message }}
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="email"
                                                class="form-control border-0 @error('email') is-invalid @enderror"
                                                name="email" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                            <div class="invalid-feedback">
                                                @error('email')
                                                    {{ $message }}
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text"
                                                class="form-control border-0 @error('subject') is-invalid @enderror"
                                                name="subject" id="subject" placeholder="Subject">
                                            <label for="subject">Subject</label>
                                            <div class="invalid-feedback">
                                                @error('subject')
                                                    {{ $message }}
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control border-0 @error('message') is-invalid @enderror" name="message"
                                                placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                            <label for="message">Message</label>

                                            <div class="invalid-feedback">
                                                @error('message')
                                                    {{ $message }}
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            {!! appSettings('maps') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
