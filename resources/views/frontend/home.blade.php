@extends('frontend.layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">
    <section>
        <div class="section--default">
            <div class="c-carousel carousel--home" data-interval = "5000">
                    <div class="c-carousel-item active">
                        <img src="{{ asset('frontend/images/banner1.jpg') }}" alt="">
                    </div>
                    <div class="c-carousel-item">
                        <img src="{{ asset('frontend/images/banner2.jpg') }}" alt="">
                    </div>
                    <div class="c-carousel-item">
                        <img src="{{ asset('frontend/images/banner3.jpg') }}" alt="">
                    </div>
                <div class="c-carousel-indicators">
                    <ul>
                        <li class="c-carousel-indicator-li active"></li>
                        <li class="c-carousel-indicator-li"></li>
                        <li class="c-carousel-indicator-li"></li>
                    </ul>
                </div> 
            </div>
        </div>
    </section>
    <section>
        @foreach($categories as $category)
        @if(!empty($category->products))
        <div class="container section--default mt-5">
            <div class="mt-5">
                <p class="home-product__name">{{ $category->name }}</p>
                <p>
                    <img class="img-about img-responsive" src="{{ asset('frontend/images/title-1.png') }}" class="d-block" alt="...">
                </p>
                <p class="text-center">{{ $category->description }}</p>
            </div>
            <div class="row">
                @foreach($category->products->take(8) as $product)
                    <div class="col-md-4 col-sm-6 mt-4">
                        <div class="home--product">
                            <a  href="{{ route('product', ['slug' => $product->slug]) }}">
                                <div class="home--product__img">
                                    <img src="{{ asset($product->thumbnail) }}" alt="Img" class="img-responsive" />
                                </div>
                            </a>
                            <div class="home--product__text">
                                <div class="home--product__title">
                                    <span><a class="home--product__name" href="{{ route('product', ['slug' => $product->slug]) }}">{{ $product->name }}</a></span>
                                </div>
                                <div class="home--product__description">
                                    <p class="home--product__location"><strong>Vị trí:</strong> {{ $product->location }}</p>
                                    <p><strong>Tổng diện tích:</strong> {{ $product->total_area }}</p>
                                    <p class="home--product__type"><strong>Loại hình: </strong> {{ $product->type }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-3">
                <div class="home--product__view">
                    <a href="{{ route('category', ['slug' => $category->slug]) }}" class="font-weight-bold color--link text-uppercase">
                        Xem tất cả
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-forward-fill" viewBox="-1 -2 16 16">
                            <path d="M9.77 12.11l4.012-2.953a.647.647 0 0 0 0-1.114L9.771 5.09a.644.644 0 0 0-.971.557V6.65H2v3.9h6.8v1.003c0 .505.545.808.97.557z"/>
                        </svg>
                    </a>   
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </section>
    <section class="mt-30 home--about bg section-bg fill bg-fill bg-loaded">
        <div class="container">
            <div class="mt-5">
                <p class="home--about__title">Về chúng tôi</p>
                <p>
                    <img class="img-about img-responsive" src="{{ asset('frontend/images/title-1.png') }}" class="d-block" alt="...">
                </p>
                <p class="text-center">CÔNG TY CỔ PHẦN DỊCH VỤ VÀ ĐẦU TƯ BẤT ĐỘNG SẢN</p>
            </div>
            <div class="row pb-5 pt-5">
                <div class="col-md-3 col-sm-6">
                    <div class="home--about__content">
                        <h2 class="home--about__title block-title">Chữ tâm</h2>
                        <div class="block-content">
                            <div class="home--about__text">
                                <p>Khách hàng của 
                                    <strong>Bất Động Sản "....."</strong>&nbsp;
                                    luôn được thành viên của công ty phục vụ bằng cái&nbsp;
                                    <strong>TÂM</strong>. Luôn thẳng thắn, chân thành để đem đến những giá trị tốt nhất cho Khách hàng của mình.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="home--about__content">
                        <h2 class="home--about__title block-title">Chữ tính</h2>
                        <div class="block-content">
                            <div class="home--about__text">
                                <p>Lấy chữ 
                                    <strong>TÍN</strong> 
                                    làm đầu, giao dịch cùng<strong> Bất Động sản ".....". </strong>
                                    Khách hàng được đảm bảo các vấn đề: chất lượng, giá cả, thủ tục hỗ trợ trước và sau quá trình giao dịch cùng khách hàng.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="home--about__content">
                        <h2 class="home--about__title block-title">Chữ tài</h2>
                        <div class="block-content">
                            <div class="home--about__text">
                                <p>Những con người tại 
                                    <strong>Bất Động sản "....."</strong>&nbsp;
                                    đều là những nhân <strong>TÀI</strong>
                                    , có đam mê, nhiệt huyết, kiến thức để trở thành những chuyên viên môi giới chuyên nghiệp hàng đầu Việt Nam.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="home--about__content">
                        <h2 class="home--about__title block-title">Chữ tầm</h2>
                        <div class="block-content">
                            <div class="home--about__text">
                                <p>Mục đích cuối cùng của
                                    <strong> Bất Động sản "....."</strong>&nbsp;
                                    là khẳng định giá trị vượt trội của bản thân, của tập thể sao cho xứng&nbsp;
                                    <strong>TẦM</strong>&nbsp;là đơn vị phân phối bất động sản hàng đầu Việt Nam.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-30 home--active bg section-bg fill bg-fill bg-loaded">
        <div class="container">
            <div class="home--active__content mt-5">
                <p class="home--active__title">Lĩnh vực hoạt động</p>
                <p>
                    <img class="img-about img-responsive" src="{{ asset('frontend/images/titlesc.png') }}" class="d-block" alt="...">
                </p>
                <p class="text-center text-uppercase">LĨNH VỰC HOẠT ĐỘNG CHUYÊN NGHIỆP QUA NHIỀU NĂM HOẠT ĐỘNG</p>
            </div>
            <div class="row pb-5 pt-5">
                <div class="col-md-4 col-sm-6">
                    <div class="home--active__icon">
                        <div class="col-lg-2 col-sm-6 col-xs-12 home--icon__Circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="3 -7 9 30">
                                <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                                <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                            </svg>
                        </div>
                        <span class="active-title__inner">MÔI GIỚI BẤT ĐỘNG SẢN</span>
                    </div>
                    <div>
                        <div class="home--active__content-inner">
                            <p>
                                Dịch vụ môi giới và tư vấn bất động sản của chúng tôi luôn thấu hiểu nhu cầu, lựa chọn của khách hàng có năng lực phù hợp nhất với mỗi loại đất bất động sản.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="home--active__icon">
                        <div class="col-lg-2 col-sm-6 col-xs-12 home--icon__Circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-journal-check" viewBox="3 -7 9 30">
                                <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>
                        </div>
                        <span class="active-title__inner">QUẢN LÝ BẤT ĐỘNG SẢN</span>
                    </div>
                    <div>
                        <div class="home--active__content-inner">
                            <p>
                                Chúng tôi có đội ngũ chuyên viên tư vấn tận tâm, giàu kinh nghiệm sẽ giúp quý khách quản lý và giao dịch bất động sản phù hợp với mọi nhu cầu của khách hàng
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="home--active__icon">
                        <div class="col-lg-2 col-sm-6 col-xs-12 home--icon__Circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-grid" viewBox="3 -7 9 30">
                                <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
                            </svg>
                        </div>
                        <span class="active-title__inner">CHO THUÊ CĂN HỘ</span>
                    </div>
                    <div>
                        <div class="home--active__content-inner">
                            <p>
                                Với một quy trình tư vấn chuyên nghiệp, chúng tôi sẽ giúp khách hàng cho thuê và thuê được bất đông sản đáp ứng nhu cầu nhà ở của khách hàng nhanh nhất
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-5 pt-5">
                <div class="col-md-4 col-sm-6">
                    <div class="home--active__icon">
                        <div class="col-lg-2 col-sm-6 col-xs-12 home--icon__Circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-credit-card-2-front" viewBox="3 -7 9 30">
                                <path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
                                <path d="M2 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </div>
                        <span class="active-title__inner">QUẢNG CÁO BẤT ĐỘNG SẢN</span>
                    </div>
                    <div>
                        <div class="home--active__content-inner">
                            <p>
                                Chúng tôi đã cho ra đời hệ thống cổng thông tin bất động sản một cách chuyên nghiệp với ưu tiên hàng đầu là quảng bá các sản phẩm bất động sản.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="home--active__icon">
                        <div class="col-lg-2 col-sm-6 col-xs-12 home--icon__Circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-badge" viewBox="3 -7 9 30">
                                <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                            </svg>
                        </div>
                        <span class="active-title__inner">THỦ TỤC PHÁP LÝ NHÀ ĐẤT</span>
                    </div>
                    <div>
                        <div class="home--active__content-inner">
                            <p>
                                Chuyên tư vấn miễn phí về nhà đất, nhà ở, giấy phép, xây dựng, hoàn công, tranh chấp, lệ phí trước bạ nhà – đất, đáp ứng mọi quy mô bất động sản.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="home--active__icon">
                        <div class="col-lg-2 col-sm-6 col-xs-12 home--icon__Circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-journal-arrow-up" viewBox="3 -7 9 30">
                                <path fill-rule="evenodd" d="M8 11a.5.5 0 0 0 .5-.5V6.707l1.146 1.147a.5.5 0 0 0 .708-.708l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 6.707V10.5a.5.5 0 0 0 .5.5z"/>
                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                            </svg>
                        </div>
                        <span class="active-title__inner">CHỦ ĐẦU TƯ</span>
                    </div>
                    <div>
                        <div class="home--active__content-inner">
                            <p>
                                Công Ty Cổ Phần Việt Nhân Bắc Ninh. Bất động sản. Mang sứ mệnh và trọng trách phát triển Bắc Ninh, chúng tôi được thành lập với nhiệm vụ kết nối thông tin, …
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-30 home--event bg section-bg fill bg-fill bg-loaded">
        <div class="container">
            <div class="home--event__content mt-5">
                <p class="home--event__title">TIN TỨC VÀ SỰ KIỆN</p>
                <p>
                    <img class="img-about img-responsive" src="{{ asset('frontend/images/title-1.png') }}" class="d-block" alt="...">
                </p>
            </div>
           
            <div class="row">
                <div class="col-md-6 col-sm-6 mb-5">
                    <div class="">
                        <div class="row">
                            @foreach($news->take(1) as $items)
                            <div class="">
                                <div class="">
                                    <a href="{{ route('news', ['slug' => $items->slug]) }}">
                                        <img class="home--img-event img-responsive" src="{{ asset($items->thumbnail) }}" class="d-block" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="{{ route('news', ['slug' => $items->slug]) }}">
                                    <h5 class="home--news__title">
                                        {{ $items->title }} 
                                    </h5>
                                </a>
                                <a class="home--news_content" href="{{ route('news', ['slug' => $items->slug]) }}">
                                    <p class="home--news__text">
                                        {{ $items->short_description }} 
                                    </p>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    @foreach($news->take(3) as $index => $items)
                        @if($index > 0)
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-5 col-sm-6">
                                    <a href="{{ route('news', ['slug' => $items->slug]) }}">        
                                        <img width="750" height="210" class="img-event-right" src="{{ asset($items->thumbnail) }}" class="d-block" alt="...">
                                    </a>
                                </div>
                                <div class="col-md-7 col-sm-6">
                                    <a href="{{ route('news', ['slug' => $items->slug]) }}">
                                        <h5 class="home--news__title">
                                            {{ $items->title }}
                                        </h5>
                                    </a>
                                    <a class="home--news_content" href="{{ route('news', ['slug' => $items->slug]) }}">
                                        <p class="home--news__text">
                                            {{ $items->short_description }}
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- <section>
        <div class="container">
            <div class="mt-5" style="color: #FFFFFF">
                <p class="text-center font-weight-bold text-uppercase" style="font-size: 25px; color: #f48120">CÁC ĐỐI TÁC NGÂN HÀNG HỖ TRỢ VAY</p>
                <p>
                    <img class="img-about" src="{{ asset('frontend/images/title-1.png') }}" class="d-block" alt="...">
                </p>
            </div>
            <div class="row pb-5 pt-5">
                <div class="col-md-3 col-sm-6">
                    <div class="box-image-bank">
                        <img src="{{ asset('frontend/images/vietin-bank.png') }}" class="d-block" alt="...">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box-image-bank">
                        <img src="{{ asset('frontend/images/vietcom-bank.png') }}" class="d-block" alt="...">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box-image-bank">
                        <img src="{{ asset('frontend/images/public-bank.png') }}" class="d-block" alt="...">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box-image-bank">
                        <img src="{{ asset('frontend/images/tp-bank.jpg') }}" class="d-block" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
@endsection