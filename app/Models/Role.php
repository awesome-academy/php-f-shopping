<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $table = 'roles';

    protected $guarded = array();

    public function permission()
    {
        return $this->belongsToMany(Permission::class, 'role_permissions');
    }
}
