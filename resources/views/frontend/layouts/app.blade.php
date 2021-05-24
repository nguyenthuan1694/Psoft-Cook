<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Vsssssssssss') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vrsg.css') }}">
    @yield('css')
</head>
<body>
    @include('frontend.layouts.header')

    @yield('content')

    @include('frontend.layouts.footer')
    <div class="backtotop"><i class="ti-angle-double-up"></i></div>

    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/slick.js') }}"></script>
    <script src="{{ asset('frontend/js/vrsg.js') }}"></script>

    @yield('script')

    <script>
        function addToCart(id, qty) {
            console.log(qty)
            $.ajax({
                type: 'POST',
                url: '{{ route('cart.add') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    product_id: id,
                    qty: qty
                }
            }).then(function (res) {
                $('#cart_qty').html(res.data.count);
                $('#cart_content').html(function () {
                    let html = '';
                    res.data.content.forEach(function (e) {
                       html = html +
                           `<div class="item-view-cart">
                                <div class="w-item-mini">
                                    <img src="${e.options.img}" alt="">
                                </div>
                                <div class="content-text-item">
                                    <a href="#">${e.name}</a>
                                    <p>${e.qty} x ${e.price} VNĐ</p>
                                </div>
                                <span class="remove-item" onclick="removeFromCart('${e.rowId}')"><i class="ti-close"></i></span>
                            </div>`;
                    });
                    return html;
                })
                $('#cart_total').html(res.data.total);
            });
        }

        function removeFromCart(row_id) {
          $.ajax({
            type: 'DELETE',
            url: '{{ route('cart.remove') }}',
            data: {
              _token: '{{ csrf_token() }}',
              row_id: row_id,
            }
          }).then(function (res) {
            $('#cart_qty').html(res.data.count);
            $('#cart_content').html(function () {
              let html = '';
              res.data.content.forEach(function (e) {
                html = html +
                  `<div class="item-view-cart">
                                <div class="w-item-mini">
                                    <img src="${e.options.img}" alt="">
                                </div>
                                <div class="content-text-item">
                                    <a href="#">${e.name}</a>
                                    <p>${e.qty} x ${e.price} VNĐ</p>
                                </div>
                                <span class="remove-item" onclick="removeFromCart('${e.rowId}')"><i class="ti-close"></i></span>
                            </div>`;
              });
              return html;
            })
            $('#cart_total').html(res.data.total);
          });
        }
    </script>
</body>
</html>
