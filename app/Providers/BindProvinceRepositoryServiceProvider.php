<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Province\ProvinceInterface;
use App\Repositories\Province\ProvinceRepository;
use App\Repositories\Province\District\DistrictInterface;
use App\Repositories\Province\District\DistrictRepository;

class BindProvinceRepositoryServiceProvider extends ServiceProvider
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
        $this->app->bind(ProvinceInterface::class, ProvinceRepository::class);
        $this->app->bind(DistrictInterface::class, DistrictRepository::class);
    }
}
