<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyUser extends Model
{
    protected $table = 'my_users'; //使得Myuser和这张表绑定,orm model
    protected $fillable = ['name', 'age', 'sex', 'email', 'password'];

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

    public function sex2Str($sex)
    {
        if ($sex % 3 == 0) {

        }
    }
}
