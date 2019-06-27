<?php

namespace App\Repositories\Recipe;

use App\Models\Recipe;
use App\Repositories\Recipe\RecipeInterface;
use App\Repositories\BaseRepository;

class RecipeRepository extends BaseRepositories implements RecipeInterafce
{
    public function getModel()
    {
        return Recipe::class;
    }
}