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

Route::get('/', 'HomeController@showWelcome');

Route::get('sayhello/{name}','HomeController@sayHello');
Route::get('roll-dice/{guess}', 'HomeController@rollDice');

Route::get('resume', 'HomeController@resume');
Route::get('portfolio', 'HomeController@portfolio');

Route::resource('posts', 'PostsController');

Route::get('orm-test', function ()
{
    $post = Post::find(1);
    $post->title = "New Title Goes Here.";
    $post->save();
    return $post;
});
