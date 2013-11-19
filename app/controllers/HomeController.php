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
		return View::make('hello');
	}

	public function login()
	{
		return View::make('home.login');
	}
	public function postlogin()
	{
		$input = Input::all();

		$rules = array('first_name' => 'requried', 'last_name' => 'requried','address' => 'requried', 'city' => 'requried', 'state' => 'requried', 'zip' => 'requried', 'email' => 'required|unique:users|email', 'phone' => 'required|unique:users|phone', 'education' => 'requried' , 'status' => 'requried', 'username' => 'required',  'password' => 'required');
		
		return View::make('home.login');

		$v = Validator::make($input, $rules);

 	
 		if($v->passes())
    	{
    		$password = $input['password'];
    		/*This will hash our passwords when we make them*/
    		$password = Hash::make($password);
 		
 		$users = new User();
 		$users->first_name = $_POST['first_name'];
 		$users->last_name = $_POST['last_name'];
 		$users->address = $_POST['address'];
 		$users->city = $_POST['city'];
		$users->zip = $_POST['zip'];
		$users->email = $_POST['email'];
		$users->phone = $_POST['phone'];
		$users->education = $_POST['education'];
		$users->status = $_POST['status'];
		$users->username = $_POST['username'];
		$users->password = $_POST['password'];

 		return Redirect::to('login');

		} else {
    			/*Otherwise it will redirect the user back to the Register page - IF it doesn't pass`
    			When it redirects back to the register page it will keep input from previous trial as well as return the errors from our Validator '$v'*/
    				return Redirect::to('login')->withInput()->withErrors($v);
    			}
    	}
 	}
