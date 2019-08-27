<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
#added
use Illuminate\Support\Facades\Schema; //NEW: Import Schema


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


    function boot()
    {
        #added
        Schema::defaultStringLength(191); //NEW: Increase StringLength
    }
}
