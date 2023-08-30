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
                                    value="{{ old('name', $socialMedia->name) }}" id="name">
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
                                        value="{{ old('icon', $socialMedia->icon) }}" id="icon">
                                    <div class="invalid-feedback">
                                        @error('icon')
                                            {{ $message }}
                                        @enderror
    
                                    </div>
                                    <span>From Icon <a href="https://icons.getbootstrap.com/">click</a></span>
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
                                    <th>Icon</th>
                                    <th>Name</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @forelse($socialMedias as $socialMedia)
                                    <tr>
                                        <td>{!! $socialMedia->icon !!}</td>
                                        <td>{{$socialMedia->name}}</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-arrow">
                                                
                                                    <a class="dropdown-item "
                                                        href="{{ route('social-medias.edit', $socialMedia) }}">Edit</a>
 
                                                    <form action="{{ route('social-medias.destroy', $socialMedia) }}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="dropdown-item form-control text-danger"
                                                            type="submit" onclick="return confirm('Are You Sure ?')">
                                                            Delete
                                                        </button>
                                                    </form>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td colspan="42" class="font-italic text-center">No Record Found</td>
                                        </tr>
                                    @endforelse
                                </tbody>


                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
