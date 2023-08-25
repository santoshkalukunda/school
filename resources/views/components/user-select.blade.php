<div class="mb-2">
    <label for="user_id" class="col-form-label text-md-end required">{{ __('Users') }}</label>

    <select class="form-control select2 required @error('user_id') is-invalid @enderror" name="user_id" id="user_id">
        <option value="">Choose</option>
        @foreach ($users as $user)
            <option value="{{ $user->id }}">
                {{ $user->name }}
            </option>
        @endforeach

    </select>
    @error('user_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
