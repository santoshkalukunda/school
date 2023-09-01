@extends('layouts.app', ['title' => __('Contact Us')])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div>
                                {{ $title = 'Contact Us' }}
                            </div>
                          
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-md table-bordered">
                                <thead>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @forelse($contacts as $contact)
                                        <tr>
                                            <td>{{ $contact->name }}</td>
                                            <td>
                                                {{ $contact->email }}
                                            </td>
                                            <td>{{ $contact->subject }}</td>
                                            <td>{{ $contact->message }}</td>
                                            <td class="text-right">
                                                <form action="{{ route('contact-us.destroy', $contact) }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="dropdown-item form-control text-danger" type="submit"
                                                        onclick="return confirm('Are You Sure ?')">
                                                        Delete
                                                    </button>
                                                </form>
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
                        {{ $contacts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
