<?php

namespace App\Repositories\User\Role;

use App\Models\Role;
use App\Repositories\User\Role\RoleInterface;
use App\Repositories\BaseRepository;

class RoleRepository extends BaseRepository implements RoleInterafce
{
    public function getModel()
    {
        return Role::class;
    }
}
