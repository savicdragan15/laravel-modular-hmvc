<?php
// Frontend RESTFULL routes
Route::resource('user', 'Modules\User\Http\Controllers\Frontend\UserController', ['middleware' => 'web']);

// Frontend custom routes
Route::group(['middleware' => 'web', 'prefix' => 'user', 'namespace' => 'Modules\User\Http\Controllers'], function()
{

});

// Admin RESTFULL routes
Route::resource('admin/user', 'Modules\User\Http\Controllers\Admin\UserController', ['middleware' => 'web', 'as' => 'admin', 'prefix' => 'admin']);

// Admin custom routes
Route::group(['middleware' => 'web', 'prefix' => 'admin/user', 'namespace' => 'Modules\User\Http\Controllers'], function()
{
    Route::get('datatables/data', 'Admin\UserController@getData')->name('admin.user.datatables.data');
});
