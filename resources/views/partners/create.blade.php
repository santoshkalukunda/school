@extends('layouts.app', ['title' => __('Partners Create')])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div>
                                {{ $title = 'Partners Create' }}
                            </div>
                            {{-- <div>
                               <a href="{{route('pages.create')}}" class="btn btn-primary">Add New</a>
                            </div> --}}
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ $partner->id ? route('partners.update', $partner) : route('partners.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @if ($partner->id)
                                @method('put')
                            @endif
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="mb-3">
                                        <label for="name" class="form-label required">Name</label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name', $partner->name) }}" id="name"
                                            aria-describedby="name">
                                        <div class="invalid-feedback">
                                            @error('name')
                                                {{ $message }}
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label required">Feature Image</label>
                                        <div class="mb-2 align-self-center">
                                            <img id="newProfilePhotoPreview"
                                                src="{{ $partner->image ? asset('storage/' . $partner->image) : asset('assets/img/no-image.png') }}"
                                                class="carousel-image @error('iamge') is-invalid @enderror">
                                            <div class="edit-profile mx-md-6 my-2">
                                                <label class="btn btn-secondary @error('image') is-invalid @enderror" for="newProfilePhoto">Choose</label>
                                                <input type="file" id="newProfilePhoto" name="image"
                                                    class="@error('image') is-invalid @enderror" accept="image/*" hidden>
                                            </div>
                                        </div>
                                        <div class="invalid-feedback">
                                            @error('image')
                                                {{ $message }}
                                            @enderror

                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="url" class="form-label ">URL</label>
                                        <input type="url" name="url"
                                            class="form-control @error('url') is-invalid @enderror"
                                            value="{{ old('url', $partner->url) }}" id="url"
                                            aria-describedby="url">
                                        <div class="invalid-feedback">
                                            @error('url')
                                                {{ $message }}
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="summernote" class="form-label">Descriptions</label>
                                        <textarea name="descriptions" class="form-control"  rows="5">{{$partner->descriptions}}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="status" class="form-label">{{ __('Status') }}</label>

                                        <select class="form-control" name="status" id="status"
                                            aria-label="Default select example">
                                            <option value="1" {{ $partner->status == '1' ? 'selected' : '' }}>
                                                Publish</option>
                                            <option value="0" {{ $partner->status == '0' ? 'selected' : '' }}>
                                                Unpublish</option>
                                        </select>

                                        @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 text-end">
                                    <button type="submit" class="btn btn-primary">
                                        {{ $partner->id ? 'Update' : 'Save' }}</button>
                                </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script>
        function readNewProfilePhotoUrl(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('newProfilePhotoPreview').setAttribute('src', e.target.result);
                    initializeCroppie();
                    openNewPicWindow();
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        var newProfilePhoto = document.getElementById('newProfilePhoto');
        newProfilePhoto.addEventListener('change', function() {
            console.log('Profile photo selected');
            readNewProfilePhotoUrl(this);
        });
    </script>
@endpush

@endsection
