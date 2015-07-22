<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('admin', 'Auth\AuthController@getLogin');
Route::post('admin', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

Route::get('/', function () {
    $page = \App\Page::find('index');
    return view('pages.show', compact('page'));
});
Route::get('{pages}', 'PagesController@show');

Route::model('pages', 'App\Page');



Route::group(['middleware' => 'auth'], function () {
    Route::resource('admin/pages', 'PagesController', ['only' => ['index', 'show', 'edit', 'store', 'create']]);
    Route::get('admin/pages/{pages}/delete', 'PagesController@delete');
    Route::post('admin/pages/{pages}/update', 'PagesController@update');
});