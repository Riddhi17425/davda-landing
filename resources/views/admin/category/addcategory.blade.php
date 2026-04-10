@extends('admin.layouts.app')

@section('title', 'Category Add')

@section('content')
<div class="container-xxl">

    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div
                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Category Add</h3>
                <!--<button type="submit"-->
                <!--    class="btn btn-primary py-2 px-5 text-uppercase btn-set-task w-sm-100">Save</button>-->
            </div>
        </div>
    </div> <!-- Row end  -->
    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="{{ route('category.store') }}">
            @csrf
            <div class="row g-3 mb-3">
                <div class="col-lg-12">
                    <div class="card mb-3">
                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">Category Details</h6>
                        </div>
                        <div class="card-body">
                            <div class="row g-3 align-items-start">
                                <div class="col-md-6">
                                    <label class="form-label">Title</label>
                                    <input type="text" id="category_title" name="category_title" class="form-control"
                                        value="{{ old('category_title') }}" placeholder="Category Title">
                                    @if ($errors->has('category_title'))
                                    <span class="text-danger">{{ $errors->first('category_title') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">URL</label>
                                    <input type="text" id="url" name="url" class="form-control"
                                        value="{{ old('url') }}" placeholder="Category URL">
                                    @if ($errors->has('url'))
                                    <span class="text-danger">{{ $errors->first('url') }}</span>
                                    @endif
                                </div>
                                @include('admin.category.partials.image-manager', ['existingImages' => []])
                            </div>

                        </div>
                    </div>
                </div>
            </div><!-- Row end  -->
            <button type="submit" class="btn btn-primary py-2 px-5 text-uppercase btn-set-task w-sm-100">Save</button>
        </form>
    </div>
</div>
@endsection

@push('styles')
<!-- Summernote CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">

<!-- Cropper CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">

<!--plugin css file -->
<link rel="stylesheet" href="{!! asset('public/admin_public/dist/assets/plugin/multi-select/css/multi-select.css') !!}">
<link rel="stylesheet"
    href="{!! asset('public/admin_public/dist/assets/plugin/bootstrap-tagsinput/bootstrap-tagsinput.css') !!}">
<link rel="stylesheet" href="{!! asset('public/admin_public/dist/assets/plugin/dropify/dist/css/dropify.min.css') !!}">
<link rel="stylesheet"
    href="{!! asset('public/admin_public/dist/assets/plugin/datatables/responsive.dataTables.min.css') !!}">
<link rel="stylesheet"
    href="{!! asset('public/admin_public/dist/assets/plugin/datatables/dataTables.bootstrap5.min.css') !!}">
<style>
    .category-image-grid {
        display: grid;
        gap: 1rem;
        grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
    }

    .category-image-card {
        position: relative;
        border: 1px solid #dfe3ea;
        border-radius: 12px;
        overflow: hidden;
        background: #fff;
    }

    .category-image-card img {
        display: block;
        width: 100%;
        height: 140px;
        object-fit: cover;
    }

    .category-image-card-body {
        padding: 0.75rem;
        font-size: 0.875rem;
        color: #495057;
        word-break: break-word;
    }

    .category-image-remove {
        position: absolute;
        top: 0.5rem;
        right: 0.5rem;
        width: 28px;
        height: 28px;
        border: 0;
        border-radius: 50%;
        background: rgba(33, 37, 41, 0.8);
        color: #fff;
        font-size: 1rem;
        line-height: 1;
    }

    .category-image-empty {
        border: 1px dashed #c7ced8;
        border-radius: 12px;
        padding: 1rem;
        color: #6c757d;
        text-align: center;
    }
</style>
@endpush

@push('scripts')
<!-- Summernote JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
<!-- Cropper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
<script src="{!! asset('public/admin_public/dist/assets/plugin/multi-select/js/jquery.multi-select.js') !!}"></script>
<script src="{!! asset('public/admin_public/dist/assets/plugin/bootstrap-tagsinput/bootstrap-tagsinput.js') !!}">
</script>
<script src="{!! asset('public/admin_public/dist/assets/bundles/dropify.bundle.js') !!}"></script>
<script src="{!! asset('public/admin_public/dist/assets/bundles/dataTables.bundle.js') !!}"></script>
<script src="{{ asset('public/admin/category/category-images.js') }}"></script>


<script>
$(document).ready(function() {
    $('#description').summernote({
        placeholder: 'Enter here...',
        height: 300,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['insert', ['link', 'picture', 'hr']],
            ['view', ['fullscreen', 'codeview']],
            ['help', ['help']]
        ]
    });
});


</script>
@endpush
