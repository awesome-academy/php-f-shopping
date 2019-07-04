<?php

namespace App\Repositories\User\Role;

use App\Models\Role;
use App\Repositories\User\Role\RoleInterface;
use App\Repositories\BaseRepository;

class RoleRepository extends BaseRepository implements RoleInterface
{
    public function getModel()
    {
        return Role::class;
    }
}
