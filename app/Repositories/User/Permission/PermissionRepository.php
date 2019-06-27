<?php

namespace App\Repositories\User\Permission;

use App\Models\Permission;
use App\Repositories\User\Permission\PermissionInterface;
use App\Repositories\BaseRepository;

class PermissionRepository extends BaseRepository implements PermissionInterface
{
    public function getModel()
    {
        return Permission::class;
    }
}
