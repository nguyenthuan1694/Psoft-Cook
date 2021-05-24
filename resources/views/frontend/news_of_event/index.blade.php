@extends('frontend.layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/introduce.css') }}">
    {{ Breadcrumbs::render('news', $news) }}
    <section>
        <div class="container">
            <div class="container section--default">
                <div class="row mt-3 introduce-news">
                    <div class="col-lg-9 col-sm-9 col-xs-12">
                        @foreach($news as $items)
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="introduce_img">
                                        <a href="{{ route('news', ['slug' => $items->slug]) }}"><img src="{{ asset($items->thumbnail) }}" alt="" class="img-responsive"></a>
                                    </div>
                                    <div class="product-bage product-badge__outline">
                                        <div class="product-badge__inner">
                                            <span class="product-badge__stt">New</span><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="introduce-text">
                                        <a href="{{ route('news', ['slug' => $items->slug]) }}">
                                            <h5>{{ $items->title }}</h5>
                                            <p class="introduce-text__short_description">{{ $items->short_description }}</p>
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                    <div class="col-lg-3 col-sm-3 col-xs-12">
                        <div class="list-cate-left">
                            <div class="introduce-register__product section--default">
                                <div class="register__product">
                                    <p class="register__product-title">Đăng ký xem sản phẩm</p>
                                    <div class="register__product-content">
                                            <form class="needs-validation" novalidate action="{{ route('home.store') }}" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                                <div class="form-group row">
                                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Username">
                                                </div>
                                                <div class="form-group row">
                                                    <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
                                                </div>
                                                <div class="form-group row">
                                                    <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="Phone">
                                                </div>
                                                <div class="form-group row">
                                                    <button class="btn btn-order w-100" type="submit">Đặt ngay</button>
                                                </div>
                                                <div class="text-center">
                                                    <small>Hoặc</small>
                                                </div>
                                                <hr>
                                            </form>
                                        <div class="register__product-contract">
                                            <a href="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots mr-1" viewBox="0 0 16 16">
                                                    <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                                    <path d="M2.165 15.803l.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z"/>
                                                </svg>
                                                Tư vấn thêm</a>
                                            <a href="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone mr-1" viewBox="0 0 16 16">
                                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                                </svg>
                                                Gọi lại cho tôi
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="introduce-product section--default">
                                <h4 class="introduce-product__title">Sản phẩm nổi bật</h4>
                                <div>
                                    @foreach($products->take(10) as $product)
                                    <ul>
                                        <li class="introduce-product__li">
                                            <div class="row">
                                                <div class="col-md-5 cool-sm-5 introduce-product__img">
                                                    <div class="product-img__same">
                                                        <a href="{{ route('product', ['slug' => $product->slug]) }}"><img src="{{ asset($product->thumbnail) }}" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="introduce-product__content col-md-7 col-sm-7">
                                                    <a href="{{ route('product', ['slug' => $product->slug]) }}" class="introduce-product__text font-weight-bold">
                                                        {{ $product->name }}
                                                    </a>
                                                    <div style="position: relative">
                                                        <svg style="color: #d5d5d5;" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                                        </svg>
                                                        <small style=" color: #d5d5d5;position: absolute;top: 2px;padding-left: 3px;">
                                                            {{ date('d/m/Y', strtotime($product->created_at)) }}
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection