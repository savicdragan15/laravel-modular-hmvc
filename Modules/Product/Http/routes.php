<?php
// Frontend RESTFULL routes
Route::resource('product', 'Modules\Product\Http\Controllers\Frontend\ProductController', ['middleware' => 'web']);

// Frontend custom routes
Route::group(['middleware' => 'web', 'prefix' => 'product', 'namespace' => 'Modules\Product\Http\Controllers'], function()
{

});

// Admin RESTFULL routes
Route::resource('admin/product', 'Modules\Product\Http\Controllers\Admin\ProductController', ['middleware' => 'web', 'as' => 'admin', 'prefix' => 'admin']);
Route::resource('admin/productimage', 'Modules\Product\Http\Controllers\Admin\ImageController', ['middleware' => 'web', 'as' => 'admin', 'prefix' => 'admin']);
Route::resource('admin/productcategory', 'Modules\Product\Http\Controllers\Admin\CategoryController', ['middleware' => 'web', 'as' => 'admin', 'prefix' => 'admin']);
Route::resource('admin/productreview', 'Modules\Product\Http\Controllers\Admin\ReviewController', ['middleware' => 'web', 'as' => 'admin', 'prefix' => 'admin']);

// Admin product custom routes
Route::group(['middleware' => 'web', 'prefix' => 'admin/product', 'namespace' => 'Modules\Product\Http\Controllers'], function()
{
    Route::get('datatables/data', 'Admin\ProductController@getData')->name('admin.product.datatables.data');
    Route::post('active/{id}', 'Admin\ProductController@active')->name('admin.product.active');
});

// Admin productimage custom routes
Route::group(['middleware' => 'web', 'prefix' => 'admin/productimage', 'namespace' => 'Modules\Product\Http\Controllers'], function()
{
    Route::post('active', 'Admin\ImageController@active')->name('admin.productimage.active');
});

// Admin productcategory custom routes
Route::group(['middleware' => 'web', 'prefix' => 'admin/productcategory', 'namespace' => 'Modules\Product\Http\Controllers'], function()
{
    Route::post('active/{id}', 'Admin\CategoryController@active')->name('admin.productcategory.active');
    Route::get('reorder/category', 'Admin\CategoryController@reorder')->name('admin.productcategory.reorder');
    Route::post('reorder/category', 'Admin\CategoryController@postReorder')->name('admin.productcategory.reorder');

});


// Admin productreview custom routes
Route::group(['middleware' => 'web', 'prefix' => 'admin/productreview', 'namespace' => 'Modules\Product\Http\Controllers'], function()
{
    Route::post('active/{id}', 'Admin\ReviewController@active')->name('admin.productreview.active');
});
