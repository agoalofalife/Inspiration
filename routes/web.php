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

        addTextNode(config_path('app.php'), 'AppServiceProvider', "        Test\\Test\\TestProvider::class,\n");
    });
});
