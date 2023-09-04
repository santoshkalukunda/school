<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope-fill"></i><a href="mailto:{{ appSettings('email') }}">{{ appSettings('email') }}</a>
            <i class="bi bi-phone-fill phone-icon"></i> <a href="tel:{{ appSettings('phpne') }}">{{ appSettings('phone') }}</a>       </div>
        <div class="social-links d-none d-md-block">
            <a href="{{ appSettings('facebook') }}" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="{{ appSettings('twitter') }}"><i class="bi bi-twitter"></i></a>
            <a href="{{ appSettings('tiktok') }}"><i class="bi bi-tiktok"></i></a>
            <a href="{{ appSettings('instagram') }}"><i class="bi bi-instagram"></i></a>
            <a href="{{ appSettings('youtube') }}"><i class="bi bi-youtube"></i></a>
        </div>
    </div>
</section>
