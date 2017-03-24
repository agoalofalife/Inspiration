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

        insertServiceProvider(config_path('app.php'), 'TinkerServiceProvider', 'Test\Providers\AppServiceProvider::class');
    });
});
