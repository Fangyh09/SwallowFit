<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AndroidUser extends Model
{
    protected $table="android_users";
    protected $fillable = ['username', 'password', 'email'];
    public $timestamps = false;
}
