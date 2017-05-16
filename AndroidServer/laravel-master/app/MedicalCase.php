<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalCase extends Model
{
    protected $table = 'medicalcase'; //使得Myuser和这张表绑定,orm model
    protected $fillable = ['name', 'id', 'category_id'];
    public $timestamps = false;

}
