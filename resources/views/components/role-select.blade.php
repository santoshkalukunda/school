<div class="mb-3">
    {{-- <label for="role" class="col-form-label text-md-right request">{{ __('Role') }}</label> --}}
    <select id="role" type="text" class="form-control text-capitalize  @error('role') is-invalid @enderror"
        name="role">
        <option value="">Role Select</option>
        @foreach ($roles as $role)
            <option value="{{ $role->name }}"
                {{ old('role', $role->name) == implode($user->getRoleNames()->toArray()) ? 'selected' : '' }}>
                {{ $role->name }}</option>
        @endforeach
    </select>
    @error('role')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
