<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
    protected $table = 'Userinfo';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = ['user_id'];
}
