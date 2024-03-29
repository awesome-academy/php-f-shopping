<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    protected $table = 'contacts';

    protected $date = [
        'created_at',
        'updated_at',
    ];

    protected $guarded = [];
}
