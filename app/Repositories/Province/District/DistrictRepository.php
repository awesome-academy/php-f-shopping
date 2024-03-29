<?php

namespace App\Repositories\Province\District;

use App\Models\District;
use App\Repositories\Province\District\DistrictInterface;
use App\Repositories\BaseRepository;

class DistrictRepository extends BaseRepository implements DistrictInterface
{
    public function getModel()
    {
        return District::class;
    }
}
