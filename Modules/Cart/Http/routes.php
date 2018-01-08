<?php
//Frontend routes
Route::group(['middleware' => 'web', 'prefix' => 'cart', 'namespace' => 'Modules\Cart\Http\Controllers'], function()
{
    Route::get('/', 'Frontend\CartController@index');
});

//Admin routes
Route::group(['middleware' => 'web', 'prefix' => 'admin/cart', 'namespace' => 'Modules\Cart\Http\Controllers'], function()
{
    Route::get('/', 'Admin\CartController@index');
});

