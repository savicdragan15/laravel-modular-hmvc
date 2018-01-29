<?php
// Frontend RESTFULL routes
Route::resource('news', 'Modules\News\Http\Controllers\Frontend\NewsController', ['middleware' => 'web']);

// Frontend custom routes
Route::group(['middleware' => 'web', 'prefix' => 'news', 'namespace' => 'Modules\News\Http\Controllers'], function()
{

});

// Admin RESTFULL routes
Route::resource('admin/news', 'Modules\News\Http\Controllers\Admin\NewsController', ['middleware' => 'web', 'as' => 'admin', 'prefix' => 'admin']);
Route::resource('admin/newscategory', 'Modules\News\Http\Controllers\Admin\CategoryController', ['middleware' => 'web', 'as' => 'admin', 'prefix' => 'admin']);
Route::resource('admin/newstag', 'Modules\News\Http\Controllers\Admin\TagController', ['middleware' => 'web', 'as' => 'admin', 'prefix' => 'admin']);

// Admin productimage custom routes
Route::group(['middleware' => 'web', 'prefix' => 'admin/news', 'namespace' => 'Modules\News\Http\Controllers'], function()
{
    Route::post('active/{id}', 'Admin\NewsController@active')->name('admin.news.active');
});


// Admin productcategory custom routes
Route::group(['middleware' => 'web', 'prefix' => 'admin/newscategory', 'namespace' => 'Modules\News\Http\Controllers'], function()
{
    Route::post('active/{id}', 'Admin\CategoryController@active')->name('admin.newscategory.active');
    Route::get('reorder/category', 'Admin\CategoryController@reorder')->name('admin.newscategory.reorder');
    Route::post('reorder/category', 'Admin\CategoryController@postReorder')->name('admin.newscategory.reorder');

});

// Admin newstag custom routes
Route::group(['middleware' => 'web', 'prefix' => 'admin/newstag', 'namespace' => 'Modules\News\Http\Controllers'], function()
{
    Route::post('active/{id}', 'Admin\TagController@active')->name('admin.newstag.active');
});
