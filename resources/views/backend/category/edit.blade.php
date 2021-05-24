@extends('backend.layouts.app')

@section('content')
    <!-- Breadcrumb -->
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categories</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <div class="container-fluid px-xxl-65 px-xl-20">
        <!-- Title -->
        <div class="hk-pg-header">
            <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="external-link"></i></span></span>Edit the category</h4>
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Information</h5>

                    <div class="row">
                        <div class="col-sm">
                            <form class="needs-validation" novalidate action="{{ route('categories.update', ['category' => $category->id]) }}" method="post">
                                @method('PUT')
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $category->id }}">
                                <div class="form-group row">
                                    <div class="offset-2 col-md-6">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Category name" value="{{ $category->name }}" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-2 col-md-6">
                                        <label>Slug</label>
                                        <input type="text" class="form-control" name="slug" placeholder="Category slug" value="{{ $category->slug }}" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-2 col-md-6">
                                        <label>Parent</label>
                                        <select class="form-control custom-select" name="parent_id">
                                            <option value="" selected>--- ROOT ---</option>
                                            @include('backend.includes.categories_options', ['categories' => $allCategory, 'dash' => '', 'selected' => $category->parent_id, 'type' => 'single'])
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-2 col-md-6">
                                        <label>Description</label>
                                        <textarea class="form-control" rows="3" name="description" placeholder="Write some description about the category">{{ $category->description }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-2 col-md-6">
                                        <button class="btn btn-info" type="submit">UPDATE</button>
                                        <a href="{{ route('categories.index') }}" class="btn btn-light">CANCEL</a>
                                    </div>
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

@section('script')
    <script src="{{ asset('backend/dist/js/validation-data.js') }}"></script>
@endsection
