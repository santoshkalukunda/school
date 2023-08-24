@extends('layouts.app', ['title' => __('Category')])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ $title = 'Category' }}</div>
                    <div class="card-body">
                        <form
                            action="{{ $category->id ? route('categories.update', $category) : route('categories.store') }}"
                            method="post">
                            @csrf
                            @if ($category->id)
                                @method('put')
                            @endif
                            <div class="mb-3">
                                <label for="name" class="form-label required">Category</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name', $category->name) }}" id="name" aria-describedby="name">
                                <div class="invalid-feedback">
                                    @error('name')
                                        {{ $message }}
                                    @enderror

                                </div>
                            </div>
                            <div class="mb-3">
                                <select name="parent_id" class="custom-select @error('parent_id') is-invalid @enderror "
                                    id="" required>
                                    <option value="">None</option>
                                    @foreach ($categories as $firstLevelCategory)
                                        <option value="{{ $firstLevelCategory->id }}"
                                            @if ($category->parentCategory && $category->parentCategory->id == $firstLevelCategory->id) selected @endif>
                                            {{ $firstLevelCategory->name }}
                                        </option>
                                        @foreach ($firstLevelCategory->childcategories as $secondLevelCat)
                                            <option value="{{ $secondLevelCat->id }}"
                                                @if ($category->parentCategory && $category->parentCategory->id == $secondLevelCat->id) selected @endif>
                                                -- {{ $secondLevelCat->name }}
                                            </option>
                                        @endforeach
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    @error('parent_id')
                                        {{ $message }}
                                    @enderror

                                </div>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ $category->id ? 'Update' : 'Save' }}</button>
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
                                    @forelse($categories as $firstLevelCategory)
                                    @include('category.table-row', [
                                        'category' => $firstLevelCategory,
                                        'level' => 1,
                                    ])

                                    {{-- Second level --}}
                                    @foreach ($firstLevelCategory->childCategories as $secondLevelCategory)
                                        @include('category.table-row', [
                                            'category' => $secondLevelCategory,
                                            'level' => 2,
                                            'parentCategoryName' => $firstLevelCategory->name,
                                        ])

                                        {{-- Third level --}}
                                        @foreach ($secondLevelCategory->childCategories as $thirdLevelCategory)
                                            @include('category.table-row', [
                                                'category' => $thirdLevelCategory,
                                                'level' => 3,
                                                'parentCategoryName' => $secondLevelCategory->name,
                                            ])
                                        @endforeach
                                    @endforeach
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
