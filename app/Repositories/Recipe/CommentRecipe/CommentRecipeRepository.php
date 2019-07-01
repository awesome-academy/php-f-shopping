<?php

namespace App\Repositories\Recipe\CommentRecipe;

use App\Models\CommentRecipe;
use App\Repositories\Recipe\CommentRecipe\CommentRecipeInterface;
use App\Repositories\BaseRepository;

class CommentRecipeRepository extends BaseRepository implements CommentRecipeInterafce
{
    public function getModel()
    {
        return CommentRecipe::class;
    }
}
