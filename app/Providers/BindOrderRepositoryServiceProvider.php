<?php 

namespace App\Providers;

use App\Repositories\Order\OrderInterface;
use App\Repositories\Order\OrderRepository;
use App\Repositories\Order\OrderDetail\OrderDetailInterface;
use App\Repositories\Order\OrderDetail\OrderDetailRepository;

class BindOrderRepositoryServiceProvider extends ServiceProvider
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
        $this->app->bind(OrderInterface::class, OrderRepository::class);
        $this->app->bind(OrderDetailInterface::class, OrderDetailRepository::class);
    }
}