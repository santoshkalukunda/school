@extends('layouts.app', ['title' => __('Teams Create')])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div>
                                {{ $title = 'Teams Create' }}
                            </div>
                            {{-- <div>
                               <a href="{{route('pages.create')}}" class="btn btn-primary">Add New</a>
                            </div> --}}
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ $team->id ? route('teams.update', $team) : route('teams.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @if ($team->id)
                                @method('put')
                            @endif
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">


                                        <div class="col-md-6 mb-3">
                                            <label for="name" class="form-label required">Name</label>
                                            <input type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror"
                                                value="{{ old('name', $team->name) }}" id="name"
                                                aria-describedby="name">
                                            <div class="invalid-feedback">
                                                @error('name')
                                                    {{ $message }}
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="designation" class="form-label required">Designation</label>
                                            <input type="text" name="designation"
                                                class="form-control @error('designation') is-invalid @enderror"
                                                value="{{ old('designation', $team->designation) }}" id="designation"
                                                aria-describedby="designation">
                                            <div class="invalid-feedback">
                                                @error('designation')
                                                    {{ $message }}
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="email" class="form-label required">Email</label>
                                            <input type="email" name="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                value="{{ old('email', $team->email) }}" id="email"
                                                aria-describedby="email">
                                            <div class="invalid-feedback">
                                                @error('email')
                                                    {{ $message }}
                                                @enderror

                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="phone" class="form-label required">Phone</label>
                                            <input type="tel" name="phone"
                                                class="form-control @error('phone') is-invalid @enderror"
                                                value="{{ old('phone', $team->phone) }}" id="phone"
                                                aria-describedby="phone">
                                            <div class="invalid-feedback">
                                                @error('phone')
                                                    {{ $message }}
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="address" class="form-label required">Address</label>
                                            <input type="text" name="address"
                                                class="form-control @error('address') is-invalid @enderror"
                                                value="{{ old('address', $team->address) }}" id="address"
                                                aria-describedby="address">
                                            <div class="invalid-feedback">
                                                @error('address')
                                                    {{ $message }}
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="status" class="form-label">{{ __('Status') }}</label>
    
                                            <select class="form-control" name="status" id="status"
                                                aria-label="Default select example">
                                                <option value="1" {{ $team->status == '1' ? 'selected' : '' }}>
                                                    Publish</option>
                                                <option value="0" {{ $team->status == '0' ? 'selected' : '' }}>
                                                    Unpublish</option>
                                            </select>
    
                                            @error('status')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="" class="form-label required">Photos</label>
                                        <div class="mb-2 align-self-center">
                                            <img id="newProfilePhotoPreview"
                                                src="{{ $team->photo ? asset('storage/' . $team->photo) : asset('assets/img/no-image.png') }}"
                                                class="profile">
                                            <div class="edit-profile mx-md-6">
                                                <label class="btn btn-secondary " for="newProfilePhoto">Choose</label>
                                                <input type="file" id="newProfilePhoto" name="photo" class=""
                                                    accept="image/*" hidden>
                                            </div>
                                        </div>
                                    </div>
                              
                                </div>

                                <div class="mb-3 text-end">
                                    <button type="submit" class="btn btn-primary">
                                        {{ $team->id ? 'Update' : 'Save' }}</button>
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
