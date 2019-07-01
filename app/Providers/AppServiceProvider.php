<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            \App\Repositories\Category\CategoryInterface::class,
            \App\Repositories\Category\CategoryRepository::class
        );

        $this->app->singleton(
            \App\Repositories\Contact\ContactInterface::class,
            \App\Repositories\Contact\ContactRepository::class
        );

        $this->app->singleton(
            \App\Repositories\Customer\CustomerInterface::class,
            \App\Repositories\Customer\CustomerRepository::class
        );

        $this->app->singleton(
            \App\Repositories\Product\ProductInterface::class,
            \App\Repositories\Product\ProductRepository::class
        );

        $this->app->singleton(
            \App\Repositories\Session\SessionInterface::class,
            \App\Repositories\Session\SessionRepository::class
        );
        
        //bind repository
        $this->app->register(BindOrderRepositoryServiceProvider::class);
        $this->app->register(BindProvinceRepositoryServiceProvider::class);
        $this->app->register(BindRecipeRepositoryServiceProvider::class);
        $this->app->register(BindUserRepositoryServiceProvider::class);
    }
}
