@extends('layouts.app', ['title' => __('Category Menu')])
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
@section('content')
    <div class="container-fluid mt--7">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ $title = 'Category Menu' }}</div>
                    <div class="card-body">
                        <form action="{{ route('category-menu.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <select name="category_id" id=""
                                    class="custom-select @error('category_id') is-invalid @enderror">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    @error('category_id')
                                        {{ $message }}
                                    @enderror

                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="display_name" class="form-label required">Display Name</label>
                                <input type="text" name="display_name"
                                    class="form-control @error('display_name') is-invalid @enderror"
                                    value="{{ old('display_name', $categoryMenu->display_name) }}" id="display_name"
                                    aria-describedby="display_name">
                                <div class="invalid-feedback">
                                    @error('display_name')
                                        {{ $message }}
                                    @enderror

                                </div>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">
                                    Add</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $title }}</div>

                    <div class="card-body">

                        <div id="sortable-category-menu">
                            @foreach ($categoryMenus as $categoryMenu)
                                <div class="d-flex align-items-center border" data-id="{{ $categoryMenu->id }}"
                                    data-order="{{ $categoryMenu->position ?? 0 }}">
                                    <div class="sort-handle p-2"><span class="mr-3"><i
                                                class="fas fa-arrows-alt fa-lg"></i></span></div>
                                    <div>{{ $categoryMenu->display_name }}</div>
                                    <div class="remove-menu-item ml-auto btn btn-sm btn-danger"
                                        data-id="{{ $categoryMenu->id }}">{{ __('Remove') }}</div>
                                </div>
                            @endforeach
                        </div>

                        <button id="update-menu-order-btn" type="button" class="btn btn-primary mx-0 mt-3">Update
                            menu</button>

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
                    var menuItems = [];
                    $('.order-updated').each(function() {
                        menuItems.push({
                            id: $(this).attr('data-id'),
                            position: $(this).attr('data-order')
                        });
                    });
                    console.table(menuItems);
                    axios({
                        method: 'put',
                        url: "{{ route('category-menu.sort') }}",
                        data: {
                            menuItems: menuItems,
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

            $('.remove-menu-item').click(function(e) {
                e.preventDefault();
                let menuItem = $(this).parent();
                axios({
                    method: 'delete',
                    url: "{{ route('category-menu.remove-item') }}",
                    data: {
                        id: $(this).attr('data-id'),
                    }
                }).then(function(response) {
                    console.log(response);
                    if (response.status == 200) {
                        showAlert('default', response.data.message);
                        menuItem.remove();
                    }
                }).catch(function(error) {
                    showAlert('danger', 'Failed to remove');
                });;
            });
        </script>
    @endpush
@endsection
