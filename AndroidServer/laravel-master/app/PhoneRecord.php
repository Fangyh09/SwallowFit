<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneRecord extends Model
{
    protected $table = "phone_records";
    protected $fillable = ['androidId', 'videoId','geneVideoName','create_at'];

}
