<?php

namespace App\Repositories\Order;

use App\Models\Order;
use App\Repositories\Order\OrderInterface;
use App\Repositories\BaseRepository;

class OrderRepository extends BaseRepository implements OrderInterafce
{
    public function getModel()
    {
        return Order::class;
    }
}
