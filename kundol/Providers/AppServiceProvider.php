<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Laravel\Passport\Passport;
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
        Passport::ignoreMigrations();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function boot()
    {
        define('OMISE_API_VERSION', '2019-05-29');
        define('OMISE_PUBLIC_KEY', 'pkey_test_5vuc5ef7isx31v174y5');
        define('OMISE_SECRET_KEY', 'skey_test_5sz9ddraxt6qx9qjx3q');
        Schema::defaultStringLength(191);
    }
}
