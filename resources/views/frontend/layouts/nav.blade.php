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
         <x-frontend.category-menu-view />
        </div>
    </div>
</div>