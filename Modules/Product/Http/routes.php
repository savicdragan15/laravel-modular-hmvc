<?php
//Frontend routes
Route::group(['middleware' => 'web', 'prefix' => 'product', 'namespace' => 'Modules\Product\Http\Controllers'], function()
{
    Route::get('/', 'Frontend\ProductController@index');
});

//Admin routes
Route::group(['middleware' => 'web', 'prefix' => 'admin/product', 'namespace' => 'Modules\Product\Http\Controllers'], function()
{
    Route::get('/', 'Admin\ProductController@index');
});

