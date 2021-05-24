<?php

namespace App\Http\View\Composers\Frontend;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\View\View;

class CartComposer
{
    /** @var Cart */
    protected $cart;

    /**
     * CartComposer constructor.
     * @param $cart
     */
    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $view->with('cart', $this->cart);
    }
}
