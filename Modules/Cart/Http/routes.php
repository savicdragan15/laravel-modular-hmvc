<?php
// Frontend RESTFULL routes
Route::resource('cart', 'Modules\Cart\Http\Controllers\Frontend\CartController', ['middleware' => 'web']);

// Frontend custom routes
Route::group(['middleware' => 'web', 'prefix' => 'cart', 'namespace' => 'Modules\Cart\Http\Controllers'], function()
{

});

// Admin RESTFULL routes
Route::resource('admin/cart', 'Modules\Cart\Http\Controllers\Admin\CartController', ['middleware' => 'web', 'as' => 'admin', 'prefix' => 'admin']);

// Admin custom routes
Route::group(['middleware' => 'web', 'prefix' => 'admin/cart', 'namespace' => 'Modules\Cart\Http\Controllers'], function()
{
    
});