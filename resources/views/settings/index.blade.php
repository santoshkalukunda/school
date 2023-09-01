@extends('layouts.app', ['title' => __('App Settings')])

@section('content')
    @push('styles')
        <style>
            .logo {
                width: 230px;
                height: 230px;
                object-fit: contain;
                position: relative;
            }
        </style>
    @endpush
    <div class="container-fluid mt--7">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div>
                                {{ $title = 'App Settings' }}
                            </div>

                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('app-settings.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            @method('put')
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="site_name" class="form-label required">Site Name</label>
                                                <input type="text" name="site_name"
                                                    class="form-control @error('site_name') is-invalid @enderror"
                                                    value="{{ old('site_name', appSettings('site_name')) }}" id="site_name"
                                                    aria-describedby="site_name">
                                                <div class="invalid-feedback">
                                                    @error('site_name')
                                                        {{ $message }}
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="tagline" class="form-label">Tagline</label>
                                                <input type="text" name="tagline"
                                                    class="form-control @error('tagline') is-invalid @enderror"
                                                    value="{{ old('tagline', appSettings('tagline')) }}" id="tagline"
                                                    aria-describedby="tagline">
                                                <div class="invalid-feedback">
                                                    @error('tagline')
                                                        {{ $message }}
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="address" class="form-label required">Address</label>
                                                <input type="text" name="address"
                                                    class="form-control @error('address') is-invalid @enderror"
                                                    value="{{ old('address', appSettings('address')) }}" id="address"
                                                    aria-describedby="address">
                                                <div class="invalid-feedback">
                                                    @error('address')
                                                        {{ $message }}
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="email" class="form-label required">Email</label>
                                                <input type="text" name="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    value="{{ old('email', appSettings('email')) }}" id="email"
                                                    aria-describedby="email">
                                                <div class="invalid-feedback">
                                                    @error('email')
                                                        {{ $message }}
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="phone" class="form-label required">Phone</label>
                                                <input type="text" name="phone"
                                                    class="form-control @error('phone') is-invalid @enderror"
                                                    value="{{ old('phone', appSettings('phone')) }}" id="phone"
                                                    aria-describedby="phone">
                                                <div class="invalid-feedback">
                                                    @error('phone')
                                                        {{ $message }}
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="maps" class="form-label required">Maps</label>
                                                <input type="text" name="maps"
                                                    class="form-control @error('maps') is-invalid @enderror"
                                                    value="{{ old('maps', appSettings('maps')) }}" id="maps"
                                                    aria-describedby="maps">
                                                <div class="invalid-feedback">
                                                    @error('maps')
                                                        {{ $message }}
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="facebook" class="form-label">Facebook</label>
                                                <input type="url" name="facebook"
                                                    class="form-control @error('facebook') is-invalid @enderror"
                                                    value="{{ old('facebook', appSettings('facebook')) }}" id="facebook"
                                                    aria-describedby="facebook">
                                                <div class="invalid-feedback">
                                                    @error('facebook')
                                                        {{ $message }}
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="instagram" class="form-label">Instagram</label>
                                                <input type="url" name="instagram"
                                                    class="form-control @error('instagram') is-invalid @enderror"
                                                    value="{{ old('instagram', appSettings('instagram')) }}" id="instagram"
                                                    aria-describedby="instagram">
                                                <div class="invalid-feedback">
                                                    @error('instagram')
                                                        {{ $message }}
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="twitter" class="form-label">Twitter</label>
                                                <input type="url" name="twitter"
                                                    class="form-control @error('twitter') is-invalid @enderror"
                                                    value="{{ old('twitter', appSettings('twitter')) }}" id="twitter"
                                                    aria-describedby="twitter">
                                                <div class="invalid-feedback">
                                                    @error('twitter')
                                                        {{ $message }}
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="tiktok" class="form-label">Tiktok</label>
                                                <input type="url" name="tiktok"
                                                    class="form-control @error('tiktok') is-invalid @enderror"
                                                    value="{{ old('tiktok', appSettings('tiktok')) }}" id="tiktok"
                                                    aria-describedby="tiktok">
                                                <div class="invalid-feedback">
                                                    @error('tiktok')
                                                        {{ $message }}
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="youtube" class="form-label">YouTube</label>
                                                <input type="url" name="youtube"
                                                    class="form-control @error('youtube') is-invalid @enderror"
                                                    value="{{ old('youtube', appSettings('youtube')) }}" id="youtube"
                                                    aria-describedby="youtube">
                                                <div class="invalid-feedback">
                                                    @error('youtube')
                                                        {{ $message }}
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">

                                    <div class="mb-3">
                                        <label for="" class="form-label required">Logos</label>
                                        <div class="mb-2 align-self-center">
                                            <img id="newProfilePhotoPreview"
                                                src="{{ appSettings('logo') ? asset('storage/' . appSettings('logo')) : asset('assets/img/no-image.png') }}"
                                                class="logo">
                                            <div class="edit-profile mx-md-6 mt-2">
                                                <label class="btn btn-secondary " for="newProfilePhoto">Choose</label>
                                                <input type="file" id="newProfilePhoto" name="logo"
                                                    accept="image/*" hidden>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="mb-3 text-end">
                                <button type="submit" class="btn btn-primary">
                                    Save</button>
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
