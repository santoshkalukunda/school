@extends('layouts.app', ['title' => __('Teams')])

@section('content')
    @push('styles')
        <style>
            .sortable-placeholder {
                border: 2px dashed #4285f4;
                height: 35px;
            }

            .sort-handle:hover {
                cursor: pointer;
            }
        </style>
    @endpush
    <div class="container-fluid mt--7">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div>
                                {{ $title = 'Teams' }}
                            </div>
                            <div>
                                <a href="{{ route('teams.create') }}" class="btn btn-sm btn-primary">Add New</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-md table-bordered">
                                <thead>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Social Media</th>
                                    <th>Created By</th>
                                    <th>Updated By</th>
                                    <th>Status</th>
                                    <th></th>
                                </thead>
                                <tbody id="sortable-category-menu">
                                    @forelse($teams as $team)
                                        <tr data-id="{{ $team->id }}" data-order="{{ $team->position ?? 0 }}">
                                            <td class="sort-handle p-2">
                                                <img id="newProfilePhotoPreview"
                                                    src="{{ $team->photo ? asset('storage/' . $team->photo) : asset('assets/img/no-image.png') }}"
                                                    class="profile-nav">
                                            </td>
                                            <td>{{ $team->name }}</td>
                                            <td>
                                                {{ $team->designation }}
                                            </td>
                                            <td>{{ $team->address }}</td>
                                            <td>{{ $team->email }}</td>
                                            <td>{{ $team->phone }}</td>
                                            <td></td>
                                            <td>{{ $team->creator->name }}</td>
                                            <td>{{ $team->editor->name }}</td>
                                            <td>
                                                @if ($team->status == true)
                                                    <span class="badge badge-primary">
                                                        Published
                                                    </span>
                                                @else
                                                    <span class="badge badge-secondary">
                                                        Unpublish
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
                                                            href="{{ route('teams.edit', $team) }}">Edit</a>

                                                        <form action="{{ route('posts.destroy', $team) }}" method="post">
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
                        <button id="update-menu-order-btn" type="button" class="btn btn-primary mx-0 mt-3">Update
                            Order</button>
                        {{ $teams->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $(function() {
                // Sorting
                $('#sortable-category-menu').sortable({
                    handle: '.sort-handle',
                    placeholder: 'sortable-placeholder',
                    update: function(event, ui) {
                        $(this).children().each(function(index) {
                            if ($(this).attr('data-order') != (index + 1)) {
                                $(this).attr('data-order', (index + 1)).addClass('order-updated');
                            }
                        });
                    }
                });

                function persistUpdatedOrder() {
                    var teams = [];
                    $('.order-updated').each(function() {
                        teams.push({
                            id: $(this).attr('data-id'),
                            position: $(this).attr('data-order')
                        });
                    });
                    console.table(teams);
                    axios({
                        method: 'put',
                        url: "{{ route('teams.sort') }}",
                        data: {
                            teams: teams,
                        }
                    }).then(function(response) {
                        console.log(response);
                        if (response.status == 200) {
                            showAlert('default', response.data.message);
                        }
                    });
                }

                $('#update-menu-order-btn').click(function(e) {
                    e.preventDefault();
                    persistUpdatedOrder();
                });
            });
        </script>
    @endpush
@endsection
