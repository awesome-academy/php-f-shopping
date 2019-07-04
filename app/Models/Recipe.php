<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{

    protected $table = 'recipes';
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $guarded = [];
}
