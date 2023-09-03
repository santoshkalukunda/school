@extends('layouts.app', ['title' => __('Users')])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div>
                                {{ $title = 'Users' }}
                            </div>
                            <div>
                                <a href="{{ route('users.register') }}" class="btn btn-sm btn-primary">Add New</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-md table-bordered">
                                <thead>
                                    <th>Profile</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Roles</th>
                                    <th>Status</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @forelse($users as $user)
                                        <tr>
                                            <td>

                                                <img id="newProfilePhotoPreview"
                                                    src="{{ $user->profile ? asset('storage/' . $user->profile) : asset('assets/img/no-image.png') }}"
                                                    class="profile-nav">
                                            </td>
                                            <td>{{ $user->name }}</td>
                                            <td>
                                                {{ $user->email }}
                                            </td>

                                            <td>{{ implode(' ', $user->getRoleNames()->toArray()) }}</td>

                                            <td>
                                                @if ($user->status == true)
                                                    <span class="badge badge-primary">
                                                        Active
                                                    </span>
                                                @else
                                                    <span class="badge badge-secondary">
                                                        Inactive
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only text-light" href="#"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-arrow">
                                                        <a class="dropdown-item "
                                                            href="{{ route('users.edit', $user) }}">Edit</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('users.changePassword', $user) }}">Change
                                                            Password</a>
                                                        <form action="{{ route('users.destroy', $user) }}" method="post">
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
                                            <td colspan="42" class="font-italic text-center">data not found !!!</td>
                                        </tr>
                                    @endforelse
                                </tbody>


                            </table>
                        </div>
                        {{-- {{ $users->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
