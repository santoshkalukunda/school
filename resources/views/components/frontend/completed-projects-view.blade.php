@foreach ($completedProjects as $completedProject)
    <a href="{{ route('posts.show', $completedProject) }}">
        <div class="causes-item">
            <div class="causes-img">
                <img src="{{ $completedProject->feature_image ? asset('storage/' . $completedProject->feature_image) : asset('assets/img/no-image.png') }}"
                    alt="{{ $completedProject->title }}" class="feature-image">
            </div>

            <div class="causes-text my-2">
                <h3 class="text-capitalize">{{ $completedProject->title }}</h3>

                <p>
                    {{ Str::limit(strip_tags($completedProject->descriptions), 100, $end = '...') }}
                </p>

            </div>

        </div>
    </a>
@endforeach
