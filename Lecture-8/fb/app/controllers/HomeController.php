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


	public function showUserProfile($uid){

		$count = User::where('id', '=', $uid)->count();

		if($count == 0){
			return Redirect::to('/feed');
		}

		//array
		//$user = User::where('id', '=', $uid)->get();

		//single row
		$user = User::where('id', '=', $uid)->first();

		return View::make('profile', [
			'user'	=> $user
		]);

	}


}
