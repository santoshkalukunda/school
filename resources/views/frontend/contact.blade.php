@extends('frontend.layouts.app')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Contact Us</h2>
                </div>
                <div class="col-12">
                    @if (Session::has('success'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{ Session::get('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        @push('scripts')
                            <script>
                                $('.alert').alert();
                            </script>
                        @endpush
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="section-header text-center">
                <p>Get In Touch</p>
                <h2>Contact for any query</h2>
            </div>
            <div class="contact-img">
                <img src="{{ asset('assets/img/contact-pages.png') }}" alt="Image">
            </div>
            <div class="contact-form">
                <div id="success"></div>
                <form action="{{ route('contact-us.store') }}" method="POST" id="contactForm" novalidate="novalidate">
                    @csrf
                    <div class="control-group">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            id="name" placeholder="Your Name" required="required"
                            data-validation-required-message="Please enter your name" />

                        <div class="invalid-feedback">
                            @error('name')
                                {{ $message }}
                            @enderror

                        </div>
                    </div>
                    <div class="control-group">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            id="email" placeholder="Your Email" required="required"
                            data-validation-required-message="Please enter your email" />

                        <div class="invalid-feedback">
                            @error('email')
                                {{ $message }}
                            @enderror

                        </div>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject"
                            id="subject" placeholder="Subject" required="required"
                            data-validation-required-message="Please enter a subject" />

                        <div class="invalid-feedback">
                            @error('subject')
                                {{ $message }}
                            @enderror

                        </div>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control @error('message') is-invalid @enderror" name="message" id="message"
                            placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>

                        <div class="invalid-feedback">
                            @error('message')
                                {{ $message }}
                            @enderror

                        </div>
                    </div>
                    <div>
                        <button class="btn btn-custom" type="submit" id="sendMessageButton">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
