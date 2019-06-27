<?php

namespace App\Repositories\Province;

use App\Models\Province;
use App\Repositories\Province\ProvinceInterface;
use App\Repositories\BaseRepository;

class ProvinceRepository extends BaseRepositories implements ProvinceInterafce
{
    public function getModel()
    {
        return Province::class;
    }
}
