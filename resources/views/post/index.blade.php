@extends('layouts.app', ['title' => __('Post')])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div>
                                {{ $title = 'Post' }}
                            </div>
                            <div>
                                <a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary">Add New</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-md table-bordered">
                                <thead>
                                    <th>Title</th>
                                    <th>Feature Image</th>
                                    <th>Category</th>
                                    <th>Published Date</th>
                                    <th>Created By</th>
                                    <th>Updated By</th>
                                    <th>Status</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @forelse($posts as $post)
                                        <tr>
                                            <td>{{ $post->title }}</td>
                                            <td>
                                                <img id="newProfilePhotoPreview"
                                                    src="{{ $post->feature_image ? asset('storage/' . $post->feature_image) : asset('assets/img/no-image.png') }}"
                                                    class="feature-image-thum">
                                            </td>
                                            <td>
                                                @foreach ($post->categories as $category)
                                                    <span class="badge badge-success">{{ $category->name }}</span>
                                                    {{ $loop->last ? '' : '|' }}
                                                @endforeach
                                            </td>
                                            <td>{{ $post->created_at }}</td>
                                            <td>{{ $post->creator->name }}</td>
                                            <td>{{ $post->editor->name }}</td>
                                            <td>
                                                @if ($post->status == true)
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
                                                            href="{{ route('posts.edit', $post) }}">Edit</a>

                                                        <form action="{{ route('posts.destroy', $post) }}" method="post">
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
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
