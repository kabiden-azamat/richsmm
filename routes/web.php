<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    'middleware' => 'web',
    'namespace' => 'App\Http\Controllers\Index'
], function() {
    Route::get('/', 'IndexController@index');
});

/******* Admin *******/
Route::group([
    'middleware' => ['web'],
    'namespace' => 'App\Http\Controllers\\' . config('app.panel_dir'),
    'prefix' => config('app.panel_prefix')
], function() {
    Route::group([
        'middleware' => ['auth', 'permission:user.permission_admin_panel']
    ], function() {
        Route::get('/', 'IndexController@index')->name('admin_home');
        Route::post('/logout/', 'IndexController@logout')->name('admin_logout');

        Route::get('/services', 'ServicesController@index')->name('admin_services');
        Route::get('/services/add', 'ServicesController@add')->name('admin_services_add');
        Route::post('/services/add', 'ServicesController@add_item')->name('admin_services_add_post');
        Route::get('/services/edit/{id}', 'ServicesController@edit')->name('admin_services_edit');
        Route::post('/services/edit/{id}', 'ServicesController@edit_item')->name('admin_services_edit_post');
        Route::post('/services/remove/{id}', 'ServicesController@remove_item')->name('admin_services_remove_post');

        Route::get('/services/{id}/target/add', 'ServicesController@add_target')->name('admin_services_target_add');
        Route::post('/services/{id}/target/add', 'ServicesController@add_target_item')->name('admin_services_target_add_post');
        Route::get('/services/{id}/target/edit/{id2}', 'ServicesController@edit_target')->name('admin_services_target_edit');
        Route::post('/services/{id}/target/edit/{id2}', 'ServicesController@edit_target_item')->name('admin_services_target_edit_post');
        Route::post('/services/{id}/target/remove/{id2}', 'ServicesController@remove_target_item')->name('admin_services_target_remove_post');
    });
    Route::get('/login/', 'IndexController@login')->name('admin_login')->middleware('guest');
    Route::post('/auth/', 'IndexController@auth')->name('admin_auth');
});
