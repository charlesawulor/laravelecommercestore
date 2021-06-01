<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

use App\Product;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        //Model::all()->take(10)->get();

        View::share('products', product::orderBy('id','desc')->take(4)->get());
       // View::share('products', product::orderBy('id')->get());
      // View::share('product', product::orderBy('product_price')->get());
    }
}
