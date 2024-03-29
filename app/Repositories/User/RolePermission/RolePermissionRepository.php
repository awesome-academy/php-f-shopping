<?php

namespace App\Repositories\User\RolePermission;

use App\Models\RolePermission;
use App\Repositories\User\RolePermission\RolePermissionInterface;
use App\Repositories\BaseRepository;

class RolePermissionRepository extends BaseRepository implements RolePermissionInterface
{
    public function getModel()
    {
        return RolePermission::class;
    }
}
