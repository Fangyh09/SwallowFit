<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoQueue extends Model
{
    protected $table="video_queues";
    protected $fillable = ['videoId', 'queueId'];
    public $timestamps = false;

}
