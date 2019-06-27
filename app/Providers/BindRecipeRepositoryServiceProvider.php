<?php

namespace App\Providers;

use App\Repositories\Recipe\RecipeInterface;
use App\Repositories\Recipe\RecipeRepository;
use App\Repositories\Recipe\CommentRecipe\CommentRecipeInterface;
use App\Repositories\Recipe\CommentRecipe\CommentRecipeRepository;

class BindRecipeRepositoryServiceProvider extends ServiceProvider
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
        $this->app->bind(RecipeInterface::class, RecipeRepository::class);
        $this->app->bind(CommentRecipeInterface::class, CommentRecipeRepository::class);
    }
}