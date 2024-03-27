<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
    <a href="/" class="navbar-brand">
        <h1 class="m-0 text-primary">
            <img class="site-logo"
                src="{{ appSettings('logo') ? asset('storage/' . appSettings('logo')) : asset('assets/img/no-image.png') }}"
                alt="{{ appSettings('site_name') }}">
            {{ appSettings('site_name') }}
        </h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto">
            <a href="/" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about-us') }}"
                class="nav-item nav-link {{ Request::is('about-us') ? 'active' : '' }}">About Us</a>
            <x-frontend.category-menu-view />
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Gallery</a>
                <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                    <a href="{{ route('galleries.photo')}}" class="dropdown-item {{ request()->route()->getName() == 'galleries.photo' ? 'active' : '' }}">Photo Gallery</a>
                    <a href="{{ route('galleries.video')}}" class="dropdown-item {{ request()->route()->getName() == 'galleries.video' ? 'active' : '' }}">Video Gallery</a>
                </div>
            </div>
            <a href="{{route('contact-us')}}" class="nav-item nav-link">Contact Us</a>
        </div>
        <a href="{{ route('login') }}" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">
            @auth
                Dashboard
            @else
                Login
            @endauth
            <i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
