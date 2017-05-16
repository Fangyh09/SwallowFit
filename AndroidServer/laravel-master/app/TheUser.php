<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheUser extends Model
{
    protected $table = "the_users";
    protected $fillable = ['name', 'email', 'password'];

}
