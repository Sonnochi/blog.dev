<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', 'HomeController@showWelcome');

Route::get('sayhello/{name}','HomeController@sayHello');
Route::get('roll-dice/{guess}', 'HomeController@rollDice');

Route::get('resume', 'HomeController@resume');
Route::get('portfolio', 'HomeController@portfolio');

Route::get('login', 'HomeController@showLogin');
Route::post('login', 'HomeController@doLogin');
Route::get('logout', 'HomeController@doLogout');

Route::resource('posts', 'PostsController');

Route::get('/', 'HomeController@welcome');

Route::get('slash', 'HomeController@slash');

Route::get('quiz', 'HomeController@quiz');
