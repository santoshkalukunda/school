<div class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <a href="{{route('index')}}" class="navbar-brand">
            <img src="{{ asset('assets/img/logo.jpg') }}" alt="" class="rounded-circle">
            SEEWAC NEPAL
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <a href="{{route('index')}}" class="nav-item nav-link {{ request()->route()->getName() == 'index'? 'active': '' }}">Home</a>
                <a href="{{route('about')}}" class="nav-item nav-link {{ request()->route()->getName() == 'about'? 'active': '' }}">About</a>
                <a href="program.html" class="nav-item nav-link">Program</a>
                <a href="event.html" class="nav-item nav-link">Events</a>
                <a href="blog.html" class="nav-item nav-link">Blog</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu">
                        <a href="single.html" class="dropdown-item">Detail Page</a>
                        <a href="service.html" class="dropdown-item">What We Do</a>
                        <a href="team.html" class="dropdown-item">Meet The Team</a>
                        <a href="donate.html" class="dropdown-item">Donate Now</a>
                        <a href="volunteer.html" class="dropdown-item">Become A Volunteer</a>
                    </div>
                </div>
                <a href="{{route('contact-us')}}" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </div>
</div>