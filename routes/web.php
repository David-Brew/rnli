<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'StarsController@index');
Route::post('search', 'StarsController@executeSearch');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('sponsor', 'PagesController@sponsor');

Route::get('stars', 'StarsController@list');
Route::get('stars/create', 'StarsController@create');
Route::get('stars/{id}', 'StarsController@show');
Route::post('stars', 'StarsController@store');
Route::get('stars/{id}/edit', 'StarsController@edit');
Route::patch('stars/{id}/', 'StarsController@update');
Route::delete('stars/{id}/', 'StarsController@destroy');

/*
*
* All the code above can be replaced by the line of code below
* Route::resource('stars', 'StarsController');
*
*/

Route::get('email', 'EmailController@index');
Route::post('email', 'EmailController@send');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['web']], function () {
    Route::get('sponsor', ['as'=>'sponsor','uses'=>'PaypalController@payPremium']);
    Route::post('getCheckout', ['as'=>'getCheckout','uses'=>'PaypalController@getCheckout']);
    Route::get('addStars', ['as'=>'addStars','uses'=>'PaypalController@getDone']);
    Route::get('getCancel', ['as'=>'getCancel','uses'=>'PaypalController@getCancel']);
});
