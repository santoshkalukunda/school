@extends('layouts.app', ['title' => __('पद')])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ $title = 'पद' }}</div>
                    <div class="card-body">
                        <form
                            action="{{ $designation->id ? route('designations.update', $designation) : route('designations.store') }}"
                            method="post">
                            @csrf
                            @if ($designation->id)
                                @method('put')
                            @endif
                            <div class="mb-3">
                                <label for="name" class="form-label required">पद</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name', $designation->name) }}" id="name" aria-describedby="name">
                                <div class="invalid-feedback">
                                    @error('name')
                                        {{ $message }}
                                    @enderror

                                </div>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ $designation->id ? 'सम्पादन' : 'सङ्ग्रह' }}</button>
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
                                    <th>पद</th>
                                    <th>कार्य</th>
                                </thead>
                                <tbody>
                                    @forelse($designations as $designation)
                                        <tr>
                                            <td>{{ $designation->name }}</td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only text-light" href="#"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-arrow">
                                                        <a class="dropdown-item "
                                                            href="{{ route('designations.edit', $designation) }}">सम्पादन</a>

                                                        <form action="{{ route('designations.destroy', $designation) }}"
                                                            method="post">
                                                            @method('delete')
                                                            @csrf
                                                            <button class="dropdown-item form-control text-danger"
                                                                type="submit"
                                                                onclick="return confirm('के तपाइँ हटाउन निश्चित गर्नुहुन्छ ?')">
                                                                हटाउनु होस्
                                                            </button>
                                                        </form>

                                                    </div>
                                                </div>
                                            </td>
                                          
                                        </tr>

                                    @empty
                                        <tr>
                                            <td colspan="42" class="font-italic text-center">कुनै पनि डाटा भेटिएन</td>
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