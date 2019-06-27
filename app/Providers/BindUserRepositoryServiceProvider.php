<?php

namespace App\Providers;

use App\Repositories\User\UserInterface;
use App\Repositories\User\UserRepository;
use App\Repositories\User\Permission\PermissionInterface;
use App\Repositories\User\Permission\PermissionRepository;
use App\Repositories\User\Role\RoleInterface;
use App\Repositories\User\Role\RoleRepository;
use App\Repositories\User\RolePermission\RolePermissionInterface;
use App\Repositories\User\RolePermission\RolePermissionRepository;

class BindUserRepositoryServiceProvider extends ServiceProvider
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
        $this->app->bind(UserInterface::class, UserRepository::class);
        $this->app->bind(PermissionInterface::class, PermissionRepository::class);
        $this->app->bind(RoleInterface::class, RoleRepository::class);
        $this->app->bind(RolePermissionInterface::class, RolePermissionRepository::class);
    }
}