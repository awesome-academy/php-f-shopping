<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\Product\ProductInterface;
use App\Repositories\BaseRepository;

class ProductRepository extends BaseRepositories implements ProductInterafce
{
    public function getModel()
    {
        return Product::class;
    }
}
