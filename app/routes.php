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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('say-hello', function()
{
    return View::make('say-hello')->with('name', 'CodeUp');
});

Route::get('say-hello/{name}', function($name)
{
    $age = 28;
    $data = [
        'name' => $name,
];
// lines 31-33 all do the same thing for lines 26-29
    return View::make('say-hello')->with($data);
    return View::make('say-hello')->with('name', $name)->with('age', $age);
    return View::make('say-hello', $data);

});

Route::get('resume', function()
{
    return "This is my resume";
});

Route::get('portfolio', function()
{
    return "This is my portfolio";
});
Route::get('roll-dice/{guess}',  function($guess)
{
    $roll = rand(1, 6);
    $data = [
    'guess' => $guess,
    'roll'  => $roll
    ];
    
    return View::make('roll-dice', $data);
});
