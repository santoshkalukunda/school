<div class="mb-3">
    <label for="albums" class="form-label">Albums</label>
    <input list="album" name="albums" class="form-control @error('albums') is-invalid @enderror"
        value="{{ old('albums', $gallery->albums) }}" id="albums">
    <datalist id="album">
        @foreach ($galleries as $gallery)
            <option value="{{$gallery->albums}}">
        @endforeach
    </datalist>

    <div class="invalid-feedback">
        @error('albums')
            {{ $message }}
        @enderror
    </div>
</div>
