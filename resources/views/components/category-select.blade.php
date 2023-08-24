<div class="mb-3">
    <label class="form-label required">Categories</label>

    <select class="form-select select2 text-capitalize required @error('category_id') is-invalid @enderror"
        name="category_id[]" id="category_id" multiple="multiple">
        <option value="">None</option>
        @foreach ($categories as $firstLevelCategory)
            <option value="{{ $firstLevelCategory->id }}" @if (in_array($firstLevelCategory->id, $post->categories->pluck('id')->toArray())) selected @endif>
                {{ $firstLevelCategory->name }}
            </option>
            @foreach ($firstLevelCategory->childcategories as $secondLevelCat)
                <option value="{{ $secondLevelCat->id }}" @if (in_array($secondLevelCat->id,$post->categories->pluck('id')->toArray())) selected @endif>
                    -- {{ $secondLevelCat->name }}
                </option>
            @endforeach
        @endforeach
    </select>
    <div class="invalid-feedback">
        @error('category_id')
            {{ $message }}
        @enderror

    </div>
</div>
