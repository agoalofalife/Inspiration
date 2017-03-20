<?php

/*
|--------------------------------------------------------------------------
| Inspiration Routes
|--------------------------------------------------------------------------
|
|
*/

Route::group(['prefix' => config('inspiration.routes.baseRoute') ], function () {
    Route::get(config('inspiration.routes.namePanel'), function ()    {
        dd('wep-router');
    });
});
