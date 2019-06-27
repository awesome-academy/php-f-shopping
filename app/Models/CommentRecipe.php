<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentRecipe extends Model
{

    protected $table = 'comment_recipes';
    protected $dates = ['created_at', 'updated_at'];

    protected $guarded = array();
}
