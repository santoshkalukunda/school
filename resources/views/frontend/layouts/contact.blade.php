<section class="contact section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Contact Us</h2>

        </div>

        <div class="row">
            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>{{ appSettings('address') }}</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>{{ appSettings('email') }}</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>{{ appSettings('phone') }}</p>
                    </div>

                    {!! appSettings('maps') !!}
                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="{{ route('contact-us.store') }}" method="POST" class="info">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" id="name" placeholder="Your Name" required="required"
                                data-validation-required-message="Please enter your name" />

                            <div class="invalid-feedback">
                                @error('name')
                                    {{ $message }}
                                @enderror

                            </div>
                        </div>
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                            <label for="name">Your Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" id="email" placeholder="Your Email" required="required"
                                data-validation-required-message="Please enter your email" />

                            <div class="invalid-feedback">
                                @error('email')
                                    {{ $message }}
                                @enderror

                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">Subject</label>
                        <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject"
                            id="subject" placeholder="Subject" required="required"
                            data-validation-required-message="Please enter a subject" />

                        <div class="invalid-feedback">
                            @error('subject')
                                {{ $message }}
                            @enderror

                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">Message</label>
                        <textarea class="form-control @error('message') is-invalid @enderror" name="message" id="message"
                            placeholder="Message" rows="13" required="required"
                            data-validation-required-message="Please enter your message"></textarea>

                        <div class="invalid-feedback">
                            @error('message')
                                {{ $message }}
                            @enderror

                        </div>
                    </div>

                    <div class="text-center my-2"><button class="btn btn-success" type="submit">Send Message</button></div>
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
                </form>
            </div>

        </div>

    </div>
</section>
