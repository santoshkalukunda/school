<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title text-center">
            <h2 class="mt-2">Video Gallery</h2>
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
                <div class="col-md-6 portfolio-item filter-{{ $album }}">

                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/{{ getYoutubeVideoID($gallery->url) }}"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>

                </div>
            @endforeach
        </div>
        {{ $galleries->links() }}
    </div>
</section><!-- End Portfolio Section -->
@php
    function getYoutubeVideoID($url)
    {
        $videoID = '';
        $pattern = '%(?:youtube\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i';
    
        if (preg_match($pattern, $url, $match)) {
            $videoID = $match[1];
        }
    
        return $videoID;
    }
    
@endphp
