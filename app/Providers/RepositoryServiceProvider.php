<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\SocialEntityRepository::class, \App\Repositories\SocialEntityRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\SocialEntityRepository::class, \App\Repositories\SocialEntityRepositoryEloquent::class);
        //:end-bindings:
    }
}
