@extends('backend.layouts.app')

@section('content')
    <!-- Breadcrumb -->
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <div class="container-fluid px-xxl-65 px-xl-20">
        <!-- Title -->
        <div class="hk-pg-header">
            <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="external-link"></i></span></span>Edit the product</h4>
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Information</h5>

                    <div class="row">
                        <div class="col-sm">
                            <form class="needs-validation" novalidate action="{{ route('products.update', ['product' => $product->id]) }}" method="post" enctype="multipart/form-data">
                                @method('PUT')
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="name">Name</label>
                                        <input id="name" name="name" type="text" class="form-control" placeholder="Product name" value="{{ $product->name }}" required>
                                        <small class="form-text text-muted">*Required</small>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="slug">Slug</label>
                                        <input id="slug" name="slug" type="text" class="form-control" placeholder="Product slug" value="{{ $product->slug }}" required>
                                        <small class="form-text text-muted">*Required</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="categories">Category</label>
                                        <select id="categories" name="categories[]" class="select2" multiple="multiple">
                                            @include('backend.includes.categories_options', ['categories' => $categories, 'dash' => '', 'selected' => $product->categories()->pluck('id')->toArray(), 'type' => 'multiple'])
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="location">Vị trí</label>
                                        <input id="location" type="text" class="form-control" name="location" value="{{ $product->location }}" required>
                                        <small class="form-text text-muted">*Required</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="total_area">Tổng diện tích</label>
                                        <input id="total_area" type="text" class="form-control" name="total_area" value="{{ $product->total_area }}" required>
                                        <small class="form-text text-muted">*Required</small>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="type">Loại hình</label>
                                        <input id="type" type="text" class="form-control" name="type" value="{{ $product->type }}" required>
                                        <small class="form-text text-muted">*Required</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="date_of_delivery">Ngày dự kiến bàn giao</label>
                                        <input id="date_of_delivery" name="date_of_delivery" type="text" class="form-control" value="{{ $product->date_of_delivery }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-7">
                                        <div class="form-group row">
                                            <div class="col-md">
                                                <label>Short Description</label>
                                                <div class="tinymce-wrap">
                                                    <textarea class="tinymce" rows="3" name="short_description" placeholder="Write some description about the product">{{ $product->short_description }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group row">
                                            <div class="col-md">
                                                <label>Thumbnail</label>
                                                <input type="file" name="thumbnail" class="dropify" data-default-file="{{ asset($product->thumbnail) }}" data-max-file-size="1M" />
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md">
                                                <label for="status">Status</label>
                                                <select id="status" name="status" class="form-control custom-select">
                                                    @foreach($allStatus as $key => $value)
                                                        <option value="{{ $value }}" @if($value == $product->status) selected @endif>{{ $key }}</option>
                                                    @endforeach
                                                </select>
                                                <small class="form-text text-muted">*Required</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label>Long Description</label>
                                        <div class="tinymce-wrap">
                                            <textarea class="tinymce" rows="3" name="long_description">{{ $product->long_description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="date_available">Date available</label>
                                        <input id="date_available" name="date_available" type="text" class="form-control" value="{{ $product->date_available }}">
                                    </div>
                                </div>
                                
                                <div class="float-right">
                                    <a href="{{ route('products.index') }}" class="btn btn-light">CANCEL</a>
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

    <!-- Dropify JavaScript -->
    <script src="{{ asset('backend/vendors/dropify/dist/js/dropify.min.js') }}"></script>

    <!-- Daterangepicker JavaScript -->
    <script src="{{ asset('backend/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/daterangepicker/daterangepicker.js') }}"></script>

    <!-- Form Flie Upload Data JavaScript -->
    <script>
        $(document).ready(function() {
            $('.dropify').dropify();
        });
    </script>

    <script src="{{ asset('backend/dist/js/validation-data.js') }}"></script>
    <script>
      $(function() {
        "use strict";
        $('input[name="date_available"]').daterangepicker({
          singleDatePicker: true,
          showDropdowns: true,
          minYear: 2000,
          "cancelClass": "btn-secondary",
          locale: {
            format: 'YYYY-MM-DD'
          }
        });

        $('input[name="date_of_delivery"]').daterangepicker({
          singleDatePicker: true,
          showDropdowns: true,
          minYear: 2000,
          "cancelClass": "btn-secondary",
          locale: {
            format: 'YYYY-MM-DD'
          }
        });
      });
    </script>
@endsection
