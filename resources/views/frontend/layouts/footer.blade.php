<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="footer-contact">
                    <h2>About Us</h2>
                    <p><i class="fa fa-map-marker-alt"></i> {{ appSettings('address') }}</p>
                    <p><i class="fa fa-phone-alt"></i>+977-091-520835</p>
                    <p><i class="fa fa-envelope"></i>seewackailali@gmail.com</p>
                    <div class="footer-social">
                        <a class="btn btn-custom" href="{{ appSettings('facebook') }}" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-custom" href="{{ appSettings('twitter') }}"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-custom" href="{{ appSettings('tiktok') }}"><i class="bi bi-tiktok"></i></a>
                        <a class="btn btn-custom" href="{{ appSettings('youtube') }}"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-custom" href="{{ appSettings('instagram') }}"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="footer-link">
                    <h2>Useful Links</h2>
                    <a href="{{ route('pages.show', 'terms-of-use') }}">Terms of use</a>
                    <a href="{{ route('pages.show', 'privacy-policy') }}">Privacy policy</a>
                    <a href="{{ route('pages.show', 'cookies') }}">Cookies</a>
                    <a href="{{ route('pages.show', 'help') }}">Help</a>
                    <a href="{{ route('pages.show', 'fqas') }}">FQAs</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-link">
                    <h2>Maps</h2>
                    {!! appSettings('maps') !!}
                </div>
            </div>
        </div>
    </div>
    <div class="container copyright">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; <a href="/">{{ appSettings('site_name') }}</a>, All Right Reserved.</p>
            </div>
            <div class="col-md-6">
                <p>Designed By <a href="https://mohrain.com">Mohrain</a></p>
            </div>
        </div>
    </div>
</div>
