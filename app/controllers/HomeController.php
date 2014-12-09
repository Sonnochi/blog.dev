<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return Redirect::action('HomeController@sayHello', ['Josee']);
	}
	
	public function sayHello($name)
	{
		$age = 28;
    	$data = [
        'name' => $name
        ];
        return View::make('say-hello', $data);
	}
	
	public function rollDice($guess)
	{
		$roll = rand(1, 6);
	    $data = [
	    'guess' => $guess,
	    'roll'  => $roll
	    ];
	    
	    return View::make('roll-dice', $data);
	}
	
	public function welcome()
	{
		return View::make('welcome');
	}
	
	public function resume()
	{
		return View::make('resume');
	}
	
	public function portfolio()
	{
		return View::make('portfolio');
	}
	
	public function showLogin()
	{
		return View::make('login');
	}
	
	public function doLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');
		
		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
    		return Redirect::intended('/');
		} else {
    		Session::flash('errorMessage', 'Failed to authenticate.');
    		
    		return Redirect::back();
		}
	}
	
	public function doLogout()
	{
		Auth::logout();
		
		return Redirect::action('HomeController@rollDice', mt_rand(1, 6));
	}

}
