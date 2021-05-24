@extends('backend.layouts.app')

@section('css')
@endsection

@section('content')
    <!-- Container -->
    <div class="container-fluid mt-xl-50 mt-sm-30 mt-15 px-xxl-65 px-xl-20">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-sm">
                    <div class="card-body">
                        <span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Total Products</span>
                        <div class="d-flex align-items-end justify-content-between">
                            <div>
                                <span class="d-block">
                                    <span class="display-5 font-weight-400 text-dark"></span>
                                    <small>Sản phẩm:</small>
                                    {{ $productTotal }}
                                </span>
                            </div>
                            <div>
                                <span class="text-danger font-12 font-weight-600"></span>
                            </div>
                        </div>
                        <div class="progress progress-bar-xs mt-30">
                            <div class="progress-bar bg-success w-100" role="progressbar" 
                            aria-valuenow="{{ $productIncrease }}" aria-valuemin="0" aria-valuemax="{{ $productIncrease }}"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-sm">
                    <div class="card-body">
                        <span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Total News</span>
                        <div class="d-flex align-items-end justify-content-between">
                            <div>
                                <span class="d-block">
                                    <span class="display-5 font-weight-400 text-dark"></span>
                                    <small>Tin tức và sự kiện:</small>
                                    {{ $newsTotal }}
                                </span>
                            </div>
                            <div>
                                <span class="text-danger font-12 font-weight-600"></span>
                            </div>
                        </div>
                        <div class="progress progress-bar-xs mt-30">
                            <div class="progress-bar bg-danger w-100" role="progressbar" 
                            aria-valuenow="{{ $newsIncrease }}" aria-valuemin="0" aria-valuemax="{{ $newsIncrease }}"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Container -->
@endsection

@section('script')
@endsection
