@extends('layouts.app', ['title' => __('Gallery Create')])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div>
                                {{ $title = 'Gallery Create' }}
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ $gallery->id ? route('galleries.update', $gallery) : route('galleries.store') }}"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            @if ($gallery->id)
                                @method('put')
                            @endif
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="title" class="form-label required">Title</label>
                                        <input type="text" name="title"
                                            class="form-control @error('title') is-invalid @enderror"
                                            value="{{ old('title', $gallery->title) }}" id="title"
                                            aria-describedby="title">
                                        <div class="invalid-feedback">
                                            @error('title')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="mb-3">
                                            <label for="" class="form-label required">Local Image</label>
                                            <div class="mb-2 align-self-center">
                                                <img id="newProfilePhotoPreview"
                                                    src="{{ $gallery->photo ? asset('storage/' . $gallery->photo) : asset('assets/img/no-image.png') }}"
                                                    class="carousel-image">
                                                <div class="edit-profile mx-md-6">
                                                    <label class="btn btn-secondary " for="newProfilePhoto">Choose</label>
                                                    <input type="file" id="newProfilePhoto" name="photo" class=""
                                                        accept="image/*" hidden>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center"> OR</div>
                                    <div class="mb-3">
                                        <label for="url" class="form-label ">From URL </label>
                                        <input type="url" name="url"
                                            class="form-control @error('url') is-invalid @enderror"
                                            value="{{ old('url', $gallery->url) }}" id="url" aria-describedby="url">
                                        <div class="invalid-feedback">
                                            @error('url')
                                                {{ $message }}
                                            @enderror

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="type" class="form-label required">{{ __('Type') }}</label>
                                        <select class="form-control" name="type" id="type"
                                            aria-label="Default select example">
                                            <option value="photo" {{ $gallery->type == 'photo' ? 'selected' : '' }}>
                                                Photo </option>
                                            <option value="video" {{ $gallery->type == 'video' ? 'selected' : '' }}>
                                                Video </option>
                                        </select>

                                        @error('type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <x-album-select :gallery="$gallery" />
                                    </div>

                                    <div class="mb-3">
                                        <label for="status" class="form-label">{{ __('Status') }}</label>

                                        <select class="form-control" name="status" id="status"
                                            aria-label="Default select example">
                                            <option value="1" {{ $gallery->status == '1' ? 'selected' : '' }}>
                                                Publish</option>
                                            <option value="0" {{ $gallery->status == '0' ? 'selected' : '' }}>
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
                                        {{ $gallery->id ? 'Update' : 'Save' }}</button>
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
        <script type="text/javascript">
            $("#rowAdder").click(function() {
                newRowAdd =
                    '<tr id="tr"><td><input type="text" name="name[]" class="form-control @error('name') is-invalid @enderror"value="{{ old('name[]') }}" id="name"  required><div class="invalid-feedback">@error('name'){{ $message }}@enderror</div></td>' +
                    '<td><input type="file" name="file[]"class="form-control @error('file') is-invalid @enderror" value="{{ old('file[]') }}" id="file"> <div class="invalid-feedback">@error('file'){{ $message }}@enderror</div></td>' +
                    '<td><button class="btn btn-danger bg-danger text-white" id="DeleteRow" type="button"> <i class="bi bi-trash"></i>Delete</button></td></tr>';
                $('#newinput').append(newRowAdd);
            });
            $("body").on("click", "#DeleteRow", function() {
                // console.log("delete");
                $(this).parents("#tr").remove();
            });
        </script>
    @endpush
@endsection
