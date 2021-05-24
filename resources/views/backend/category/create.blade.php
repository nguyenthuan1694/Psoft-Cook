@extends('backend.layouts.app')

@section('content')
    <!-- Breadcrumb -->
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categories</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <div class="container-fluid px-xxl-65 px-xl-20">
        <!-- Title -->
        <div class="hk-pg-header">
            <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="external-link"></i></span></span>Create a new category</h4>
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Information</h5>

                    <div class="row">
                        <div class="col-sm">
                            <form class="needs-validation" novalidate action="{{ route('categories.store') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <div class="offset-2 col-md-6">
                                        <label>Name</label>
                                        <input id="name" type="text" class="form-control" name="name" placeholder="Category name" value="" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-2 col-md-6">
                                        <label>Slug</label>
                                        <input id="slug" type="text" class="form-control" name="slug" placeholder="Category slug" value="" required>
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
                                            @include('backend.includes.categories_options', ['categories' => $allCategory, 'dash' => '', 'selected' => 'NULL', 'type' => 'single'])
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-2 col-md-6">
                                        <label>Description</label>
                                        <textarea class="form-control" rows="3" name="description" placeholder="Write some description about the category"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-2 col-md-6">
                                        <button class="btn btn-info" type="submit">CREATE</button>
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
    <script src="{{ asset('backend/dist/js/slugify.js') }}"></script>
    <script>
        let inputName = document.getElementById('name');
        inputName.onchange = function(){
            document.getElementById('slug').value = slugify(document.getElementById('name').value);
        }
    </script>
    <script src="{{ asset('backend/dist/js/validation-data.js') }}"></script>
@endsection
