<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body'];
    // $guarded is the inverse of fillable
    // can be used only one at a time
    // protected $guarded = ['id', 'created_at', 'updated_at'];    
}
