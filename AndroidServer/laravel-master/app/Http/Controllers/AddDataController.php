<?php

namespace App\Http\Controllers;

use App\MedicalCase;
use App\MyUser;
use Illuminate\Http\Request;

class AddDataController extends Controller
{
    public function add()
    {
        $file = fopen("data.txt", "r") or exit("Unable to open file!");
        $idx = 1;
        while(!feof($file))
        {
            $arr = explode(' ' , fgets($file));
            if (count($arr) > 1) {
                for ($pos = 0; $pos < count($arr); $pos ++) {
                    $case = new MedicalCase();
                    $case->category_id = $idx;
                    $case->name = $arr[$pos];
                    $case->save();
//                    dd($case);
                }
                $idx ++;
            }

        }
        fclose($file);

//        $data = MedicalCase::first();
//        dd($data);
    }

}












