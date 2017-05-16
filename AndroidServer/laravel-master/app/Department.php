<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments'; //使得Myuser和这张表绑定,orm model
    protected $fillable = ['id','name','description'];

    

    public $timestamps = false;

    
}
