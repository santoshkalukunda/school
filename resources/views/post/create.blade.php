@extends('layouts.app', ['title' => __('Post Create')])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div>
                                {{ $title = 'Post Create' }}
                            </div>
                            {{-- <div>
                               <a href="{{route('posts.create')}}" class="btn btn-primary">Add New</a>
                            </div> --}}
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ $post->id ? route('posts.update', $post) : route('posts.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @if ($post->id)
                                @method('put')
                            @endif
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="mb-3">
                                        <label for="title" class="form-label required">Title</label>
                                        <input type="text" name="title"
                                            class="form-control @error('title') is-invalid @enderror"
                                            value="{{ old('title', $post->title) }}" id="title"
                                            aria-describedby="title">
                                        <div class="invalid-feedback">
                                            @error('title')
                                                {{ $message }}
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="summernote" class="form-label required">Descriptions</label>
                                        <textarea name="descriptions" class="" id="summernote" cols="30" rows="10">{{old('descriptions',$post->descriptions)}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <x-category-select :post="$post" />
                                    <div class="mb-3">
                                        <label for="" class="form-label required">Feature Image</label>
                                        <div class="mb-2 align-self-center">
                                            <img id="newProfilePhotoPreview"
                                                src="{{ $post->feature_image ? asset('storage/' . $post->feature_image) : asset('assets/img/no-image.png') }}"
                                                class="feature-image">
                                            <div class="edit-profile mx-md-6">
                                                <label class="btn btn-secondary " for="newProfilePhoto">Choose</label>
                                                <input type="file" id="newProfilePhoto" name="feature_image"
                                                    class="" accept="image/*" hidden>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="status" class="form-label">{{ __('Status') }}</label>

                                        <select class="form-control" name="status" id="status"
                                            aria-label="Default select example">
                                            <option value="1" {{ $post->status == '1' ? 'selected' : '' }}>
                                                Publish</option>
                                            <option value="0" {{ $post->status == '0' ? 'selected' : '' }}>
                                                Unpublish</option>
                                        </select>

                                        @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">
                                        {{ $post->id ? 'Update' : 'Save' }}</button>
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
