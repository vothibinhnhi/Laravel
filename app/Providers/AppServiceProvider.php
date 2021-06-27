<?php

namespace App\Providers;

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
        $this->app->singleton(
            \App\Repositories\Interfaces\CategoryRepositoryInterface::class,
            \App\Repositories\CategoryEloquentRepository::class
        );
        $this->app->singleton(
            \App\Repositories\Interfaces\KindOfNewsRepositoryInterface::class,
            \App\Repositories\KindOfNewsEloquentRepository::class
        );
        $this->app->singleton(
            \App\Repositories\Interfaces\NewsRepositoryInterface::class,
            \App\Repositories\NewsloquentRepository::class
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
