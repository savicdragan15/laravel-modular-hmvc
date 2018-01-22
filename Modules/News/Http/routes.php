<?php
// Frontend RESTFULL routes
Route::resource('news', 'Modules\News\Http\Controllers\Frontend\NewsController', ['middleware' => 'web']);

// Frontend custom routes
Route::group(['middleware' => 'web', 'prefix' => 'news', 'namespace' => 'Modules\News\Http\Controllers'], function()
{

});

// Admin RESTFULL routes
Route::resource('admin/news', 'Modules\News\Http\Controllers\Admin\NewsController', ['middleware' => 'web', 'as' => 'admin', 'prefix' => 'admin']);
