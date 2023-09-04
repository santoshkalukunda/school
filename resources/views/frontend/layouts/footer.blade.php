<footer id="footer">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
                <div class="footer-contact">
                    <a href="/" class="logo me-auto"><img
                            src="{{ appSettings('logo') ? asset('storage/' . appSettings('logo')) : asset('assets/img/no-image.png') }}"
                            alt="{{ appSettings('site_name') }}" style="height: 50px;">
                    </a>
                    <div class="my-2"><i>{{ appSettings('tagline') }}</i></div>
                    <div class="address"><i class="bi bi-geo-alt"></i> {{ appSettings('address') }}</div>
                    <div class="phone"><i class="bi bi-phone"></i> {{ appSettings('phone') }}</div>
                    <div class="email"><i class="bi bi-envelope"></i> {{ appSettings('email') }}</div>
                </div>
                <div class="social-links">
                    <a href="{{ appSettings('facebook') }}" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="{{ appSettings('twitter') }}" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="{{ appSettings('instagram') }}" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="{{ appSettings('youtube') }}" class="google-plus"><i class="bx bxl-youtube"></i></a>
                    <a href="{{ appSettings('tiktok') }}" class="linkedin"><i class="bx bxl-tiktok"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="footer-link">
                    {{-- <h4 class="pl-3">Useful Links</h4> --}}
                    <div class="navbar">
                        <a class="nav-link"  href="{{ route('pages.show', 'terms-of-use') }}">Terms of use</a>
                    </div>
                    <div class="navbar">
                   
                          <a class="nav-link" href="{{ route('pages.show', 'privacy-policy') }}">Privacy Policy</a>
                    </div>
                    <div class="navbar">
                   
                          <a class="nav-link" href="{{ route('pages.show', 'cookies') }}">Cookies</a>
                    </div>
                    <div class="navbar">
                   
                          <a class="nav-link" href="{{ route('pages.show', 'help') }}">Help</a>
                    </div>
                    <div class="navbar">
                   
                          <a class="nav-link" href="{{ route('pages.show', 'fqas') }}">FQAs</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-link">
                    {{-- <h4 class="text-danger">Maps</h4> --}}
                    {!! appSettings('maps') !!}
                </div>
            </div>
        </div>

        <div class="copyright text-center">
            &copy; Copyright <strong><span>Forum for Awareness and Youth Activity (FAYA), Nepal </span></strong>. All
            Rights Reserved
        </div>
        <div class="credits text-center">
            Developed by <a href="https://mohrain.com/">Mohrain</a>
        </div>
    </div>
</footer>
