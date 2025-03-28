<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "post_data";
    protected $fillable = ['post_title', 'post_desc', 'image', 'users_id', 'post_date'];
}
