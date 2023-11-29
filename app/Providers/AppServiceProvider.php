<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
use Illuminate\Pagination\Paginator;
=======
>>>>>>> 819727428d8df42e2c9c7c832dc09ed41e724601

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
<<<<<<< HEAD
     *
     * @return void
     */
    public function register()
=======
     */
    public function register(): void
>>>>>>> 819727428d8df42e2c9c7c832dc09ed41e724601
    {
        //
    }

    /**
     * Bootstrap any application services.
<<<<<<< HEAD
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
    }
}
=======
     */
    public function boot(): void
    {
        //
    }
}
>>>>>>> 819727428d8df42e2c9c7c832dc09ed41e724601
