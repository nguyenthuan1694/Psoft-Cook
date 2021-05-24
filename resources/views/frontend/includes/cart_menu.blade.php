<div class="wrap-cart-icon has-item">
    <a href="{{ route('cart.index') }}" class="cart-icon"><i class="ti-shopping-cart"></i></a>
    <span id="cart_qty" class="qty-cart">{{ $cart::count() }}</span>
    <a href="{{ route('cart.index') }}">Giỏ hàng</a>
    <div class="wrap-item-view-cart">
        <div id="cart_content">
            @foreach($cart::content() as $product)
                <div class="item-view-cart">
                    <div class="w-item-mini">
                        <img src="{{ $product->options['img'] }}" alt="">
                    </div>
                    <div class="content-text-item">
                        <a href="#">{{ $product->name }}</a>
                        <p>{{ $product->qty }} x {{ number_format($product->price, 0) }} VNĐ</p>
                    </div>
                    <span class="remove-item" onclick="removeFromCart('{{ $product->rowId }}')"><i class="ti-close"></i></span>
                </div>
            @endforeach
        </div>

        <div class="wrap-total-fee">
            <!-- <p class="mb-0">Phí ship: <span class="float-right">10,000 VNĐ</span></p> -->
            <p>Tạm tính: <span class="float-right"><strong id="cart_total">{{ $cart::total() }} VNĐ</strong></span></p>
            <div class="wrap-btn-event">
                <a href="{{ route('cart.index') }}" class="btn-default">Giỏ hàng</a>
                <a href="{{ route('cart.getCheckout') }}" class="btn-default">Thanh toán</a>
            </div>
        </div>
    </div>
</div>
