<?php

namespace App\Repositories\Order\OrderDetail;

use App\Models\OrderDetail;
use App\Repositories\Order\OrderDetail\OrderDetailInterface;
use App\Repositories\BaseRepository;

class OrderDetailRepository extends BaseRepository implements OrderDetailInterafce
{
    public function getModel()
    {
        return OrderDetail::class;
    }
}
