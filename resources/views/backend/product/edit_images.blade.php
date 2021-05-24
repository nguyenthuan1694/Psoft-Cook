@extends('backend.layouts.app')

@section('content')
    <!-- Breadcrumb -->
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Images</li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <div class="container-fluid px-xxl-65 px-xl-20">
        <!-- Title -->
        <div class="hk-pg-header">
            <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="external-link"></i></span></span>Edit images of product</h4>
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">List images of product</h5>
                    <p class="mb-20"></p>
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap table-responsive">
                                <table class="table table-hover w-100 display pb-30">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>Image</th>
                                        <th>Height</th>
                                        <th>Width</th>
                                        <th>Size</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($product->images as $index => $image)
                                        <tr>
                                            <td><img src="{{ asset($image->url) }}" width="100" alt=""></td>
                                            <td>{{ $image->height }} px</td>
                                            <td>{{ $image->width }} px</td>
                                            <td>{{ $image->size }} Kb</td>
                                            <td>
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#delete_modal_{{ $index }}"> <i class="icon-trash txt-danger" data-toggle="tooltip" data-placement="top" title="Delete"></i> </a>
                                                @include('backend.includes.modal_delete_confirm', ['index' => $index, 'item' => $image, 'type' => 'image'])
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="hk-sec-wrapper">
                    <div class="hk-pg-header">
                        <h5 class="hk-sec-title">Upload new images</h5>
                        <div class="d-flex">
                            <button id="btnSubmit" class="btn btn-success btn-rounded"> <i class="icon" data-icon="&#xe055;"></i> UPLOAD</button>
                        </div>
                    </div>
                    <p class="mb-20"></p>
                    <form id="uploadImage" action="{{ route('products.addImages', ['product' => $product]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="dropzone" id="remove_link">
                                    <div class="fallback">
                                        <input name="images" type="file" multiple />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="file" name="images[]" multiple class="d-none">
                    </form>
                </section>
            </div>
        </div>
    </div>

@endsection

@section('css')
    <!-- Bootstrap Dropzone CSS -->
    <link href="{{ asset('backend/vendors/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('script')
    <!-- Dropzone JavaScript -->
    <script src="{{ asset('backend/vendors/dropzone/dist/dropzone.js') }}"></script>

    <script>
      $("div#remove_link").dropzone({
        url: "#",
        autoProcessQueue: false,
        addRemoveLinks: true,
        dictDuplicateFile: "Duplicate Files Cannot Be Uploaded",
        preventDuplicates: true,
        init: function () {
          this.on("addedfile", function (file) {
            $('.dz-progress').hide();
            if (this.files.length) {
              var _i, _len;
              for (_i = 0, _len = this.files.length; _i < _len - 1; _i++) // -1 to exclude current file
              {
                if (this.files[_i].name === file.name && this.files[_i].size === file.size && this.files[_i].lastModified.toString() === file.lastModified.toString()) {
                  this.removeFile(file);
                }
              }
            }
            setTimeout(() => {
              var fileList = new DataTransfer();
              this.files.forEach((file) => {
                fileList.items.add(file);
              });
              document.querySelectorAll('input[name="images[]"]')[0].files = fileList.files;
            }, 0);
          });
          this.on("removedfile", function (file) {
            var fileList = new DataTransfer();
            this.files.forEach((file) => {
              fileList.items.add(file);
            });
            document.querySelectorAll('input[name="images[]"]')[0].files = fileList.files;
          })
        },
      });
    </script>

    <script>
        $('#btnSubmit').click(function () {
            $('#uploadImage').submit();
        });
    </script>
@endsection