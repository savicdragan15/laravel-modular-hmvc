<?php
// Frontend RESTFULL routes
Route::resource('gallery', 'Modules\Gallery\Http\Controllers\Frontend\GalleryController', ['middleware' => 'web']);

// Frontend custom routes
Route::group(['middleware' => 'web', 'prefix' => 'gallery', 'namespace' => 'Modules\Gallery\Http\Controllers'], function()
{

});

// Admin RESTFULL routes
Route::resource('admin/gallery', 'Modules\Gallery\Http\Controllers\Admin\GalleryController', ['middleware' => 'web', 'as' => 'admin', 'prefix' => 'admin']);

// Admin custom routes
Route::group(['middleware' => 'web', 'prefix' => 'admin/user', 'namespace' => 'Modules\Gallery\Http\Controllers'], function()
{
    Route::get('datatables/data', 'Admin\GalleryController@getData')->name('admin.gallery.datatables.data');
});
