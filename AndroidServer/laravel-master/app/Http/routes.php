<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('testmain', function () {
    return view('testmain');
});
Route::get('phpinfo', function () {
    echo phpinfo();
});

Route::get('tmpdata', function () {
    echo "tmpdata";
});

Route::post('addUser', ['uses' => 'AndroidUserController@addUser']);

Route::post('verifyUser', ['uses' => 'AndroidUserController@verifyUser']);

Route::any('allVideos', ['uses' => 'VideoController@getAllVideos']);


Route::get('main', function () {
    return view('medical_case.main');
});

Route::get('index', function () {
    return view('medical_case.index');
});

Route::any('addData', ['uses' => 'AddDataController@add']);

//Route::any('test', ['uses' => 'UserController@test']);


//Route::any('test', ['uses' => 'UserController@test']);
//Route::any('test', ['uses' => 'UserController@test']);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::any('testpost', ['uses' => 'MyUserController@testpost']);
Route::any('hello', ['middleware' => 'cors',  function () {
    echo "hello";
}]);

Route::any('postImage',['middleware'=>'cors',function() {

}]);




Route::group(['middleware' => ['web']], function () {
    Route::any('myuser/index', ['uses' => 'MyUserController@index']);
    Route::any('myuser/detail/{id}', ['uses' => 'MyUserController@detail']);
    Route::any('myuser/delete/{id}', ['uses' => 'MyUserController@delete']);
    Route::any('myuser/update/{id}', ['uses' => 'MyUserController@update']);
    Route::any('myuser/create', ['uses' => 'MyUserController@create']);


    Route::any('stuff/index', ['uses' => 'StuffController@index']);
    Route::any('stuff/detail/{id}', ['uses' => 'StuffController@detail']);
    Route::any('stuff/delete/{id}', ['uses' => 'StuffController@delete']);
    Route::any('stuff/update/{id}', ['uses' => 'StuffController@update']);
    Route::get('api/medicalcase/allMedicalCase', function() {
        return \App\MedicalCase::all();
    });

    Route::get('api/medicalcase/allMedicalCaseCategory', function() {
        return \App\MedicalCaseCategory::all();
    });


});

/***
 *
 * API
 */

Route::get('medicalcase', function() {
    return view('medical_case.main');
});


Route::get('vuemain', function() {
    return view('vuemain');
});

Route::any('VideoController/upload', ['uses' => 'VideoController@upload']);
Route::any('VideoController/getHistory/{id}', ['uses' => 'VideoController@getHistory']);
Route::any('goTest', ['uses' => 'VideoController@goTest']);
Route::any('c', ['uses' => 'VideoController@goTest2']);






















