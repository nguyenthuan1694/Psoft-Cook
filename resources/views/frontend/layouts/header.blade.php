<header>
    <nav class="header-menu">
        <div class="container-fluid main-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-1">
                        <div class="logo">
                            <a href="/"><img src="{{ asset('frontend/images/logos/logo_login.png') }}" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <ul class="ul-menu">
                            <li><a href="{{ route('news-of-event') }}">Tin tức và sự kiện</a></li>
                            <li><a href="{{ route('introduce') }}">Tuyển Dụng</a></li>
                            <li><a href="#">Liên hệ</a></li>
                            <li><a href="{{ route('introduce') }}">Giới thiệu</a></li>
                            <li class="has-child">
                                <a href="#">Thực Đơn</a>
                                <ul class="sub-ul-menu">
                                    @include('frontend.includes.categories_top_menu', ['categories' => $categories])
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div class="wrap-header-right">
                            <div class="search">
                                <form action="{{ route('search') }}" method="get">
                                    <input class="form-control" type="text" name="query" placeholder="Tìm kiếm ...">
                                    <button><span class="ti-search"></span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
