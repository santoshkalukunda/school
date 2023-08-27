<div class="row">
    <style>
          .feature-image {
            border: 1px solid #ddd;
            padding: 2px;
            width: 300px;
            height: 300px;
            object-fit: cover;
            position: relative;
            /* margin: 20px; */
        }
    </style>
    @foreach ($teams as $team)
        <div class="col-lg-3 col-md-6">
            <div class="team-item">
                <div class="team-img">
                    <img class="feature-image" src="{{ $team->photo ? asset('storage/' . $team->photo) : asset('assets/img/no-image.png') }}" alt="{{$team->name}}">
                </div>
                <div class="team-text">
                    <h2 class="text-capitalize">{{$team->name}}</h2>
                    <p class="text-capitalize">{{$team->designation}}</p>
                    <div class="team-social">
                        <a href="">View</a>
                        {{-- <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
