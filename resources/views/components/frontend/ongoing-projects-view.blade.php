@foreach ($ongoingProjects as $ongoingProject)
    <a href="{{ route('posts.show', $ongoingProject) }}">
        <div class="causes-item">
            <div class="causes-img">
                <img src="{{ $ongoingProject->feature_image ? asset('storage/' . $ongoingProject->feature_image) : asset('assets/img/no-image.png') }}"
                    alt="{{ $ongoingProject->title }}" class="feature-image">
            </div>

            <div class="causes-text my-2">
                <h3 class="text-capitalize">{{ $ongoingProject->title }}</h3>
                <p>
                    {{ Str::limit(strip_tags($ongoingProject->descriptions), 100, $end = '...')}}
                </p>
            </div>

        </div>
    </a>
@endforeach
