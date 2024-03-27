@extends('layouts.app', ['title' => __('Gallery')])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div>
                                {{ $title = 'Gallery' }}
                            </div>
                            <div>
                                <a href="{{ route('galleries.create') }}" class="btn btn-sm btn-primary">Add New</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-md table-bordered">
                                <thead>
                                    <th>Type</th>
                                    <th>Title</th>
                                    <th>Album</th>
                                    <th>Thumbnail </th>
                                    {{-- <th>URL</th> --}}
                                    <th>Published Date</th>
                                    <th>Created By</th>
                                    <th>Updated By</th>
                                    <th>Status</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @forelse($galleries as $gallery)
                                        <tr>
                                            <td class="text-capitalize">{{ $gallery->type }}</td>
                                            <td class="text-capitalize">{{ $gallery->title }}</td>
                                            <td>{{ $gallery->albums }}</td>
                                            <td>
                                                @php
                                                    // Parse the video URL and extract the video ID
                                                    $parsedUrl = parse_url($gallery->url);
                                                    parse_str($parsedUrl['query'] ?? '', $queryParams);
                                                    
                                                    // Set a default video ID
                                                    $videoId = '';
                                                    
                                                    if (isset($queryParams['v'])) {
                                                        $videoId = $queryParams['v'];
                                                    } elseif (preg_match('/embed\/([^\/]+)/', $gallery->url, $matches)) {
                                                        $videoId = $matches[1];
                                                    }
                                                    
                                                    // Generate the thumbnail URL
                                                    $thumbnailUrl = "https://img.youtube.com/vi/{$videoId}/0.jpg";
                                                @endphp

                                                @if ($gallery->type == 'photo')
                                                    <img id="newProfilePhotoPreview"
                                                        src="{{ $gallery->photo ? asset('storage/' . $gallery->photo) : $gallery->url }}"
                                                        class="feature-image-thum">
                                                @else
                                                    <a href="{{ $gallery->url }}" target="_blank">
                                                        <img src="{{ $thumbnailUrl }}"
                                                            class="feature-image-thum">
                                                    </a>
                                                @endif
                                            </td>
                                            <td>{{ $gallery->created_at }}</td>
                                            <td>{{ $gallery->creator->name }}</td>
                                            <td>{{ $gallery->editor->name }}</td>
                                            <td>
                                                @if ($gallery->status == true)
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
                                                            href="{{ route('galleries.edit', $gallery) }}">Edit</a>

                                                        <form action="{{ route('galleries.destroy', $gallery) }}"
                                                            method="post">
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
                        {{ $galleries->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
