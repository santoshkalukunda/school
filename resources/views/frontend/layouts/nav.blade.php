<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

        {{-- <h1 class="logo me-auto"><a href="/"> {{appSettings('site_name')}}</a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/" class="logo me-auto"><img
                src="{{ appSettings('logo') ? asset('storage/' . appSettings('logo')) : asset('assets/img/no-image.png') }}"
                alt="{{ appSettings('site_name') }}">

        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="/">Home</a></li>
                <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li class="dropdown"><a href="#"><span>About Us</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="{{route('pages.show','who-we-are')}}">Who we are</a></li>
                                <li><a href="{{route('pages.show','mission-statement')}}">Mission Statement</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('pages.show','where-we-work')}}">Where we work</a></li>
                        <li class="dropdown"><a href="#"><span>How we work</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="{{route('pages.show','theory-of-constraints')}}">TOC</a></li>
                                <li><a href="{{route('pages.show','thematic-goal')}}">Thematic Goal</a></li>
                                <li><a href="{{route('pages.show','cross-cutting-issues')}}">Cross-Cutting Issues</a></li>
                                <li><a href="{{route('pages.show','commitment-and-appraisal')}}">Commitment and Appraisal </a></li>
                                <li><a href="{{route('pages.show','core-value')}}">Core-Value </a></li>
                                <li><a href="{{route('pages.show','innovation')}}">Innovation </a></li>
                                <li><a href="{{route('pages.show','do-no-harms')}}">Do No Harms </a></li>
                                <li><a href="{{route('pages.show','localization')}}">Localization </a></li>
                                <li><a href="{{route('pages.show','strategic-programs')}}">Strategic Programs </a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Leadership</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="{{ route('team-types.show','senior-management-team') }}">SMT</a></li>
                                <li><a href="{{ route('team-types.show','excutive-board') }}">Excutive Board</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <x-frontend.category-menu-view />

                <li><a class="nav-link scrollto" href="{{ route('contact-us') }}">Contact</a></li>
                <li><a class="getstarted scrollto" href="#">Donate Us</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
