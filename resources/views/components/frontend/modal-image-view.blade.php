@foreach ($modalImages as $modalImage)
    <div class="modal fade" id="imageModal-{{ $modalImage->id }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ $modalImage->title }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div>
                        <img class="feature-img"
                            src="{{ $modalImage->image ? asset('storage/' . $modalImage->image) : asset('assets/img/no-image.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                console.log("ready!");
                $("#imageModal-{{ $modalImage->id }}").modal('show');
            });
        </script>
    @endpush
@endforeach
