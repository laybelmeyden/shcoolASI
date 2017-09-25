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



Route::get('/', 'MainController@index');

Route::get('/contact', 'MainController@contact');

Route::get('/about', 'MainController@about');

Route::get('/newws', 'MainController@newws');

Route::get('/project', 'MainController@project');

Route::get('/new{solo}', 'MainController@newsolo');

Route::get('/project{solo}', 'MainController@projectsolo');

Route::post('/contacts', 'MainController@contacts');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
