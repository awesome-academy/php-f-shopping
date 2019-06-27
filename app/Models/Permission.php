<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{

    protected $table = 'permissions';

    protected $guarded = array();

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_permissions');
    }
}