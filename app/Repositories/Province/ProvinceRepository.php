<?php

namespace App\Repositories\Province;

use App\Models\Province;
use App\Repositories\Province\ProvinceInterface;
use App\Repositories\BaseRepository;

class ProvinceRepository extends BaseRepository implements ProvinceInterface
{
    public function getModel()
    {
        return Province::class;
    }
}
