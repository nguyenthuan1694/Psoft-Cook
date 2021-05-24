<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        View::composer(
            [
                'frontend.layouts.app', 'frontend.category', 'frontend.search', 'frontend.checkout',
                'backend.product.create', 'backend.product.edit',
            ],
            'App\Http\View\Composers\Frontend\CategoryComposer'
        );

        View::composer(
            ['frontend.includes.cart_menu', 'frontend.cart', 'frontend.checkout'],
            'App\Http\View\Composers\Frontend\CartComposer'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
