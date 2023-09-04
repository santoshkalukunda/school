@foreach ($partners as $partner)
    <div class="swiper-slide">
        <a href="{{ $partner->url ?? '#' }}" target="_blank">
            <img src="{{ $partner->image ? asset('storage/' . $partner->image) : asset('assets/img/no-image.png') }}"
                class="img-fluid" alt="{{ $partner->name }}">
        </a>
    </div>
@endforeach
