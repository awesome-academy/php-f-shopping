<?php

namespace App\Repositories\Customer;

use App\Models\Customer;
use App\Repositories\Customer\CustomerInterface;
use App\Repositories\BaseRepository;

class CustomerRepository extends BaseRepository implements CustomerInterface
{
    public function getModel()
    {
        return Customer::class;
    }
}
