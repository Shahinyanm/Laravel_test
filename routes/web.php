<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::middleware(['auth'])->group(function () {

    Route::group([
        'middleware' => 'is_admin', 'prefix' => 'admin', 'as' => 'admin.'
    ], function () {
        Route::resource('companies','Admin\CompanyController');
        Route::get('users','UserController@index')->name('users.index');
    });

});