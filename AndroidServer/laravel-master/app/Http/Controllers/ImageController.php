<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
class ImageController extends Controller
{
    public function upload(Request $request)
    {

//        $image = $request->file('picture');
//        $ext = $image->getClientOriginalExtension();
//        $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
//        $path = public_path('assets/images/products/'.$filename);
//        Image::make($image->getRealPath())-> resize(200, 200)-> save($path);

     //   if ($request->isMethod('POST')) {

            $file = $request->file('mFile');


            if ($file->isValid()) {
                $originalName = $file->getClientOriginalName();
                $ext = $file->getClientOriginalExtension();
                $realPath = $file->getRealPath();
                $type = $file->getClientMimeType();     // image/jpeg


                $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;

                $bool = \Storage::disk('uploads')->put($filename, file_get_contents($realPath));
                var_dump($bool);

            }
            $videoId = $request->get("videoId");
            $androidId = $request->get("androidId");

      //  }
        return $videoId. $androidId;
      //  return view('upload');
    }
}







