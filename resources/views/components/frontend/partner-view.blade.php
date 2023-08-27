<div class="owl-carousel testimonials-carousel">
    @foreach ($partners as $partner)
        <div class="testimonial-item">
            <a href="{{ $partner->url ?? '#' }}">
                <div class="testimonial-profile">
                    <img src="{{ $partner->image ? asset('storage/' . $partner->image) : asset('assets/img/no-image.png') }}"
                        alt="{{ $partner->name }}" class="partner-image">
                    <div class="testimonial-name">
                        <h3 class="text-capitalize">{{ $partner->name }}</h3>

                    </div>
                </div>
            </a>
            <div class="testimonial-text">
                <p>
                    {{ $partner->descriptions }}
                </p>
            </div>
        </div>
    @endforeach

</div>
