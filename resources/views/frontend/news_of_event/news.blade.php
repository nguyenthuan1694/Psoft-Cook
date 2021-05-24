@extends('frontend.layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/introduce.css') }}">
{{ Breadcrumbs::render('introduce', $news) }}
<section>
    <div class="container section--default">
        <div class="introduce-product row">
            <div class="col-lg-9 col-sm-6 col-sx-12">
                <h5 class="text-uppercase">{{ $news->title }}</h5>
                <div class="mt-3">
                    {{ $news->short_description }}
                </div>
                <div class="mt-3">
                    <img src="{{ asset($news->thumbnail) }}" alt="">
                </div>
                <div class="mt-3">
                {!! $news->long_description !!}
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-sx-12">
                <div class="introduce-product section--default">
                    <h4 class="introduce-product__title">Tin HOT</h4>
                    <div>
                        @foreach($newsData->take(10) as $news)
                        <ul>
                            <li class="introduce-product__li">
                                <div class="row">
                                    <div class="col-md-5 cool-sm-5 introduce-product__img">
                                        <div class="product-img__same">
                                            <a href="{{ route('news', ['slug' => $news->slug]) }}"><img src="{{ asset($news->thumbnail) }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="introduce-product__content col-md-7 col-sm-7">
                                        <a href="{{ route('news', ['slug' => $news->slug]) }}" class="introduce-product__text font-weight-bold">
                                            {{ $news->title }}
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        @endforeach
                    </div>
                </div>
                <div class="introduce-product section--default">
                    <h4 class="introduce-product__title">Sản phẩm nổi bật</h4>
                    <div>
                        @foreach($products->take(15) as $product)
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
</section>
@endsection