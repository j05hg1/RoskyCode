<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//llamado al metodo para paginar
use Illuminate\Pagination\Paginator;

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
        //metodo para paginar
        Paginator::useBootstrap();
    }
}
