<?php

namespace App\Repositories\Category;

use App\Models\Category;
use App\Repositories\Category\CategoryInterface;
use App\Repositories\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryInterafce
{
    public function getModel()
    {
        return Category::class;
    }
}
