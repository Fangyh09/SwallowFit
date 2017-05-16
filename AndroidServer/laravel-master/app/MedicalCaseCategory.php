<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalCaseCategory extends Model
{
    protected $table = 'medicalcase_category'; //使得Myuser和这张表绑定,orm model
    protected $fillable = ['name', 'id'];
    public $timestamps = false;

}
