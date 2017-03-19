<?php

/*
|--------------------------------------------------------------------------
| Inspiration Routes
|--------------------------------------------------------------------------
|
|
*/

Route::group(['prefix' => config('inspiration.routes.prefix') ], function () {
    Route::get('admin', function ()    {
        return view('inspiration::index');
    });
});