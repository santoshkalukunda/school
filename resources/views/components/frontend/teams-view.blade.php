@foreach ($teams as $team)
    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="member">
            <img src="{{ $team->photo ? asset('storage/' . $team->photo) : asset('assets/img/no-image.png') }}"
                alt="{{ $team->name }}">
            <h4>{{ $team->name }}</h4>
            <span>{{ $team->designation }}</span>
            <div class="text-center">
                <a href="{{ route('teams.show', $team) }}">View</a>
            </div>
            <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>
@endforeach
