<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stuff extends Model
{
    protected $table="stuffs";
    protected $fillable = ['name', 'age', 'sex', 'job'];
    const SEX_UN = 10;
    const SEX_BOY = 20;
    const SEX_GIRL = 30;
    public $timestamps = false;

    public function mapSex($id = null)
    {
        $arr = [
            self::SEX_UN => '未知',
            self::SEX_BOY => '男',
            self::SEX_GIRL => '女',

        ];
        if ($id !== null) {
            return array_key_exists($id, $arr) ? $arr[$id] : $arr[self::SEX_UN];
        }
        return $arr;
    }
}
