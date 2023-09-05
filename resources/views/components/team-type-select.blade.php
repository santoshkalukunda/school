<div class="mb-3">
    <label for="team_type_id" class="col-form-label text-md-right request">{{ __('Team Types') }}</label>
    <select id="team_type_id" type="text" class="form-control text-capitalize  @error('team_type_id') is-invalid @enderror"
        name="team_type_id">
        <option value="">Team Type Select</option>
        @foreach ($teamTypes as $teamType)
            <option value="{{ $teamType->id }}"
                {{ old('team_type_id', $teamType->id) == $team->team_type_id ? 'selected' : '' }}>
                {{ $teamType->name }}</option>
        @endforeach
    </select>
    @error('team_type_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
