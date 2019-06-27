<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Customer extends Authenticatable
{
    use Notifiable;
    protected $guard = 'customer';
    protected $table = 'customers';
    protected $guarded = [];
}

