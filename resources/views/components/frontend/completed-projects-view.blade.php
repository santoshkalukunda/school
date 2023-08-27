@foreach ($completedProjects as $completedProject)
    <div class="causes-item">
        <div class="causes-img">
            <img src="{{ $completedProject->feature_image ? asset('storage/' . $completedProject->feature_image) : asset('assets/img/no-image.png') }}"
                alt="{{ $completedProject->title }}" class="feature-image">
        </div>

        <div class="causes-text my-2">
            <h3 class="text-capitalize">{{ $completedProject->title }}</h3>
            <p>
                {!! Str::limit($completedProject->descriptions, 150, $end = '...') !!}
            </p>
        </div>

    </div>
@endforeach
