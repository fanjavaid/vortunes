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

Route::get('/', ['as' => 'frontend.home', 'uses' => 'Frontend\HomeController@index']);
Route::get('/tentang-kami', ['as' => 'frontend.tentang-kami', 'uses' => 'Frontend\PageController@aboutUs']);
// Route::get('/blog', ['as' => 'frontend.blog', 'uses' => 'Frontend\PageController@blog']);
Route::get('/hubungi-kami', ['as' => 'frontend.hubungi-kami', 'uses' => 'Frontend\PageController@contactUs']);
Route::get('/simulasi-kredit', ['as' => 'frontend.simulasi-kredit', 'uses' => 'Frontend\PageController@creditCalculation']);

Route::resource('response', 'ResponseController');