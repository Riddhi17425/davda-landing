<div class="col-md-12">
    <label for="category_slider_images" class="form-label">Images</label>
    <input
        type="file"
        class="form-control category-image-input"
        name="slider_images[]"
        id="category_slider_images"
        accept="image/*"
        multiple>

    @if ($errors->has('slider_images'))
        <span class="text-danger">{{ $errors->first('slider_images') }}</span>
    @endif

    @if ($errors->has('slider_images.*'))
        <span class="text-danger d-block mt-1">{{ $errors->first('slider_images.*') }}</span>
    @endif

    <div
        class="category-image-manager mt-3"
        data-preview-base-url="{{ asset('public/PropertyImage') }}"
        data-existing-images='@json(array_values($existingImages ?? []))'>
        <div class="category-removed-images"></div>
        <div class="category-image-grid"></div>
    </div>
</div>