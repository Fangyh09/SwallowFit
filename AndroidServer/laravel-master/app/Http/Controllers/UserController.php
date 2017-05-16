<?php

namespace App\Http\Controllers;

use App\TestUser;

class UserController extends Controller
{
    public function test()
    {
        $data = TestUser::all();
        var_dump($data);
    }
}
