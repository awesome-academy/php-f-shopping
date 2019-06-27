<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\Product\ProductInterface;
use App\Repositories\BaseRepository;

class ProductRepository extends BaseRepository implements ProductInterface
{
    public function getModel()
    {
        return Product::class;
    }
}
