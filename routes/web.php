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


Route::get('/', 'MainController@main')->name('home');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::post('/footerform', 'MainController@footerform');
Route::get('/new{solo}', 'MainController@new_solo');

Route::get('/omsk', 'MainController@omsk')->name('omsk');
Route::get('/tomsk', 'MainController@tomsk')->name('tomsk');


