@extends('layouts.app', ['title' => __('Social Media')])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ $title = 'Social Media' }}</div>
                    <div class="card-body">
                        <form
                            action="{{ $socialMedia->id ? route('social-medias.update', $socialMedia) : route('social-medias.store') }}"
                            method="post">
                            @csrf
                            @if ($socialMedia->id)
                                @method('put')
                            @endif
                            <div class="mb-3">
                                <label for="name" class="form-label required">Name</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name', $socialMedia->name) }}" id="name" aria-describedby="name">
                                <div class="invalid-feedback">
                                    @error('name')
                                        {{ $message }}
                                    @enderror

                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="icon" class="form-label required">Icon</label>
                                    <input type="text" name="icon"
                                        class="form-control @error('icon') is-invalid @enderror"
                                        value="{{ old('icon', $socialMedia->icon) }}" id="icon" aria-describedby="icon">
                                    <div class="invalid-feedback">
                                        @error('icon')
                                            {{ $message }}
                                        @enderror
    
                                    </div>
                                </div>
                                <div class="invalid-feedback">
                                    @error('parent_id')
                                        {{ $message }}
                                    @enderror

                                </div>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ $socialMedia->id ? 'Update' : 'Save' }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $title }}</div>

                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-md table-bordered">
                                <thead>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Parent</th>
                                    <th>Status</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    {{-- @forelse($socialMedias as $firstLevelCategory)
                                    

                                    @empty
                                        <tr>
                                            <td colspan="42" class="font-italic text-center">No Record Found</td>
                                        </tr>
                                    @endforelse --}}
                                </tbody>


                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
