<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::group(['middleware' => ['auth:api'], 'prefix' => 'api/' . config('inspiration.routes.baseRoute') ], function () {
//    Route::get('authentication', function ()    {
//        dd('api-router');
//        return 'test';
//    });
//});

Route::get('/authentication', function ()    {
    dd('api-router');
});

//Route::middleware('auth:api')->get('/testtest', function (Request $request) {
//    dd('te');
//    return $request->user();
//});