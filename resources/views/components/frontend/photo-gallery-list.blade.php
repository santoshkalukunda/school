<div id="portfolio" class="portfolio section-bg">
    <div class="container ">

        <div class="section-title text-center">
            <h2>Photo Gallery</h2>

        </div>
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    @php
                        $albums = [];
                    @endphp

                    @foreach ($galleries as $gallery)
                        @if (!in_array($gallery->albums, $albums))
                            @php
                                $album = preg_replace('/\s+/', '', $gallery->albums);
                            @endphp
                            <li data-filter=".filter-{{ $album }}">{{ $gallery->albums }}</li>
                            @php
                                $albums[] = $gallery->albums;
                            @endphp
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row portfolio-container">
            @foreach ($galleries as $gallery)
                @php
                    $album = preg_replace('/\s+/', '', $gallery->albums);
                @endphp
                <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $album }}">
                    <div class="portfolio-wrap">
                        <img src="{{ $gallery->photo ? asset('storage/' . $gallery->photo) : $gallery->url }}"
                            class="img-fluid" alt="{{ $gallery->title }}">
                        <div class="portfolio-info">
                            <h4>{{ $gallery->title }}</h4>
                            <p>{{ $gallery->albums }}</p>
                            <div class="portfolio-links">
                                <a href="{{ $gallery->photo ? asset('storage/' . $gallery->photo) : $gallery->url }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="{{ $gallery->title }}"><i class="bi bi-eye"></i> Preview</a>
                                {{-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{$galleries->links()}}
    </div>
</div><!-- End Portfolio Section -->
