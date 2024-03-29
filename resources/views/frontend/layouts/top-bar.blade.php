@if (appSettings('top_bar') == "show")
    <section class="d-flex align-items-center" style="background-color: {{ appSettings('top_color') }}">
        <div class="container d-md-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center gap-2">
                <i class="bi bi-envelope-fill"></i> <a class="text-white" href="mailto:{{ appSettings('email') }}">
                    {{ appSettings('email') }}</a>
                <i class="bi bi-phone-fill phone-icon"></i> <a class="text-white" href="tel:{{ appSettings('phpne') }}">
                    {{ appSettings('phone') }}</a>
                <i class="bi bi-clock-fill clock-icon"> </i> <a>
                    <span class="text-white">

                        {{ appSettings('openingTime') }}
                    </span>
                </a>
            </div>
            <div class="social-links d-none d-md-block">
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
    </section>
@endif
