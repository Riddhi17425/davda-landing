@extends('admin.layouts.app')

@section('title', 'Add Blog')

@section('content')
<div class="container-xxl">
    <div class="row align-items-center mb-4">
        <div class="col-12">
            <div class="card-header py-3 no-bg bg-transparent d-flex justify-content-between align-items-center border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Add Blog</h3>
            </div>
        </div>
    </div>

    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('blog.store') }}">
            @csrf
            <div class="card mb-3 p-3">
                <div class="card-header py-3 p-0 bg-transparent border-bottom-0">
                    <h6 class="mb-0 fw-bold">Blog Information</h6>
                </div>

                <div class="row g-3 align-items-center mt-2">

                    <!-- Blog Title -->
                    <div class="col-md-6">
                        <label class="form-label">Blog Title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                    </div>

                    <!-- Date -->
                    <div class="col-md-6">
                        <label class="form-label">Date</label>
                        <input type="text" name="date" class="form-control datepicker" value="{{ old('date') }}">
                    </div>

                    <!-- URL -->
                    <div class="col-md-6">
                        <label class="form-label">URL</label>
                        <input type="text" name="url" class="form-control" value="{{ old('url') }}" required>
                    </div>
                     <!-- Front Image  -->
                    <div class="col-md-6">
                        <label class="form-label">Front Image</label>
                        <input type="file" name="front_image" class="form-control dropify" required>
                    </div>

                    <!-- Blog Short Description -->
                    <div class="col-md-12">
                        <label class="form-label">Blog Short Description</label>
                        <textarea id="short_description" name="short_description" class="form-control">{{ old('short_description') }}</textarea>
                    </div>

                    <!-- Detail Image -->
                    <div class="col-md-6">
                        <label class="form-label">Detail Image</label>
                        <input type="file" name="detail_image" class="form-control dropify">
                    </div>

                    <!-- Blog Description -->
                    <div class="col-md-12">
                        <label for="description" class="form-label">Blog Description</label>
                        <textarea id="description" name="description" class="form-control">{{ old('description') }}</textarea>
                    </div>

                    <!-- Cta Image -->
                    <div class="col-md-6">
                        <label class="form-label">Cta Image</label>
                        <input type="file" name="cta_image" class="form-control dropify">
                    </div>

                    <div class="col-md-12">
                        <label for="conclusion" class="form-label">Conclusion</label>
                        <textarea id="conclusion" name="conclusion" class="form-control"></textarea>
                    </div>

                    <!-- Meta Title -->
                    <div class="col-md-6">
                        <label class="form-label">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title') }}">
                    </div>

                    <!-- Meta Description -->
                    <div class="col-md-12">
                        <label class="form-label">Meta Description</label>
                        <textarea id="meta_description" name="meta_description" class="form-control">{{ old('meta_description') }}</textarea>
                    </div>

                    <div class="card mb-4 border">
                            <div class="card-header bg-light d-flex justify-content-between align-items-center">
                                <strong>FAQ Title & Description</strong>
                                    <button type="button" id="addFaqBlock" class="btn btn-sm btn-success">+ Add More</button>
                            </div>
                            <div class="card-body" id="faqRepeater">
                                {{-- One FAQ block --}}
                                <div class="faqGroup border rounded p-3 mb-3">
                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <input type="text" name="faq_title[]" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Description </label>
                                        <textarea name="faq_description[]" class="form-control summernote" rows="4" ></textarea>
                                    </div>
                                    <div class="text-end">
                                        <button type="button" class="btn btn-danger removeFaq">Remove</button>
                                    </div>
                                </div>
                            </div>
                    </div>


                </div>
            </div>

            <button type="submit" class="btn btn-primary py-2 px-5 text-uppercase">Save</button>
        </form>
    </div>
</div>
@endsection

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
<link rel="stylesheet" href="{!! asset('public/admin_public/dist/assets/plugin/dropify/dist/css/dropify.min.css') !!}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
<script src="{!! asset('public/admin_public/dist/assets/bundles/dropify.bundle.js') !!}"></script>

<script>
$(document).ready(function() {
    // Summernote
    $('#description, #conclusion, #short_description, #meta_description').summernote({
        height: 200,
        toolbar: [
            ['style', ['bold', 'italic', 'underline']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['insert', ['link', 'picture', 'hr']],
            ['view', ['fullscreen', 'codeview']]
        ]
    });

    // Dropify
    $('.dropify').dropify();

    // Datepicker
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true
    });
});
</script>
<script>
    $(document).ready(function () {
        // Initialize Summernote
        $('.summernote').summernote({
            height: 200,
            placeholder: 'Enter Description here...'
        });

        // Add More
        $('#addFaqBlock').click(function () {
            let block = `
                <div class="faqGroup border rounded p-3 mb-3">
                    <div class="mb-3">
                        <label class="form-label">Title </label>
                        <input type="text" name="faq_title[]" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description </label>
                        <textarea name="faq_description[]" class="form-control summernote" rows="4" ></textarea>
                    </div>
                    <div class="text-end">
                        <button type="button" class="btn btn-danger removeFaq">Remove</button>
                    </div>
                </div>
            `;
            $('#faqRepeater').append(block);
            
            // Re-init summernote for new textareas
            $('.summernote').summernote({
                height: 200,
                placeholder: 'Enter Description here...'
            });
        });

        // Remove block
        $(document).on('click', '.removeFaq', function () {
            $(this).closest('.faqGroup').remove();
        });
    });
</script>
@endpush
