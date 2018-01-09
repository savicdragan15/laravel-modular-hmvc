<?php
// Frontend RESTFULL routes
Route::resource('product', 'Modules\Product\Http\Controllers\Frontend\ProductController', ['middleware' => 'web']);

// Frontend custom routes
Route::group(['middleware' => 'web', 'prefix' => 'product', 'namespace' => 'Modules\Product\Http\Controllers'], function()
{

});

// Admin RESTFULL routes
Route::resource('admin/product', 'Modules\Product\Http\Controllers\Admin\ProductController', ['middleware' => 'web', 'as' => 'admin', 'prefix' => 'admin']);

// Admin custom routes
Route::group(['middleware' => 'web', 'prefix' => 'admin/product', 'namespace' => 'Modules\Product\Http\Controllers'], function()
{

});
