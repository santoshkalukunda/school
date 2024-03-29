<div class="container-fluid text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s" style="background-color: {{appSettings('footer_color')}}">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Get In Touch</h3>
                <p class="mb-2"><i class="bi bi-clock-fill clock-icon me-3"></i>{{ appSettings('openingTime') }}</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ appSettings('address') }}</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ appSettings('phone') }}</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{ appSettings('email') }}</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="{{ appSettings('twitter') }}"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href="{{ appSettings('facebook') }}"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="{{ appSettings('youtube') }}"><i
                            class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href="{{ appSettings('instagram') }}"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Quick Links</h3>
                <a class="btn btn-link text-white-50" href="{{ route('about-us') }}">About Us</a>
                <a class="btn btn-link text-white-50" href="{{ route('contact-us') }}">Contact Us</a>
                <a class="btn btn-link text-white-50" href="{{ route('categories.show', 'our-features') }}">Our
                    Feature</a>
                <a class="btn btn-link text-white-50" href="{{ route('pages.show', 'privacy-policy') }}">Privacy
                    Policy</a>
                <a class="btn btn-link text-white-50" href="{{ route('pages.show', 'terms-condition') }}">Terms &
                    Condition</a>
            </div>
            <div class="col-lg-6 col-md-12">
                <h3 class="text-white mb-4">Maps</h3>

                {!! appSettings('maps') !!}
            </div>
            {{-- <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Photo Gallery</h3>
                <div class="row g-2 pt-2">
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="{{ asset('frontend/img/classes-1.jpg') }}"
                            alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="{{ asset('frontend/img/classes-2.jpg') }}"
                            alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="{{ asset('frontend/img/classes-3.jpg') }}"
                            alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="{{ asset('frontend/img/classes-4.jpg') }}"
                            alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="{{ asset('frontend/img/classes-5.jpg') }}"
                            alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="{{ asset('frontend/img/classes-6.jpg') }}"
                            alt="">
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Newsletter</h3>
                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                        placeholder="Your email">
                    <button type="button"
                        class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; {{ now()->year }} {{ appSettings('site_name') }}, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        Designed & Developed By <a class="border-bottom" href="https://spellinnovation.com/home">Spell
                            Innovation</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
