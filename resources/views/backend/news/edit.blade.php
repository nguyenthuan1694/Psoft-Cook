@extends('backend.layouts.app')

@section('content')
    <!-- Breadcrumb -->
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('news.index') }}">News</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <div class="container-fluid px-xxl-65 px-xl-20">
        <!-- Title -->
        <div class="hk-pg-header">
            <h4 class="hk-pg-title text-uppercase"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="external-link"></i></span></span>Edit a new news</h4>
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title text-uppercase">Information</h5>
                    <div class="row">
                        <div class="col-sm">
                            <form class="needs-validation" novalidate action="{{ route('news.update', ['news' => $news->id]) }}" method="post" enctype="multipart/form-data">
                                @method('PUT')
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $news->id }}">
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="title">Title</label>
                                        <input id="title" name="title" type="text" class="form-control" value="{{ $news->title }}" required>
                                        <small class="form-text text-muted">*Required</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-7">
                                        <div class="col-md">
                                            <label>Short Description</label>
                                            <div class="tinymce-wrap">
                                                <textarea class="form-control" rows="3" name="short_description" placeholder="Write some description about the news">{{ $news->short_description }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group row">
                                            <div class="col-md">
                                                <label>Thumbnail</label>
                                                <input type="file" name="thumbnail" class="dropify" data-default-file="{{ asset($news->thumbnail) }}" data-max-file-size="1M" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md">
                                        <label>Long Description</label>
                                        <div class="tinymce-wrap">
                                        <textarea class="tinymce" rows="3" name="long_description">{{ $news->long_description }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="float-right">
                                    <a href="{{ route('news.index') }}" class="btn btn-light">CANCEL</a>
                                    <button class="btn btn-info" type="submit">UPDATE</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>

            </div>
        </div>
        <!-- /Row -->
    </div>
@endsection

@section('css')
    <!-- select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- Daterangepicker CSS -->
    <link href="{{ asset('backend/vendors/daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Dropzone CSS -->
    <link href="{{ asset('backend/vendors/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Bootstrap Dropify CSS -->
    <link href="{{ asset('backend/vendors/dropify/dist/css/dropify.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('script')
    <!-- Select2 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="{{ asset('backend/dist/js/select2-data.js') }}"></script>

    <!-- Bootstrap Input spinner JavaScript -->
    <script src="{{ asset('backend/vendors/bootstrap-input-spinner/src/bootstrap-input-spinner.js') }}"></script>
    <script src="{{ asset('backend/dist/js/inputspinner-data.js') }}"></script>

    <!-- Tinymce JavaScript -->
    <script src="{{ asset('backend/vendors/tinymce/tinymce.min.js') }}"></script>

    <!-- Tinymce Wysuhtml5 Init JavaScript -->
    <script src="{{ asset('backend/dist/js/tinymce-data.js') }}"></script>

    <!-- Dropzone JavaScript -->
    <script src="{{ asset('backend/vendors/dropzone/dist/dropzone.js') }}"></script>

    <!-- Dropify JavaScript -->
    <script src="{{ asset('backend/vendors/dropify/dist/js/dropify.min.js') }}"></script>

    <!-- Daterangepicker JavaScript -->
    <script src="{{ asset('backend/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/daterangepicker/daterangepicker.js') }}"></script>

    <!-- Form Flie Upload Data JavaScript -->
    <script src="{{ asset('backend/dist/js/slugify.js') }}"></script>
    <script src="{{ asset('backend/dist/js/validation-data.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.dropify').dropify();
        });
    </script>

@endsection
