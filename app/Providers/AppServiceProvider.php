<?php

namespace App\Providers;

use Illuminate\Support\facades\Schema;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //metodo para arreglar migraciones
        Schema::defaultStringLength(191);
    }
}
