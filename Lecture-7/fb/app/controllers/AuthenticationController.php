<?php

class AuthenticationController extends \BaseController {

	public function showLoginView(){

		return View::make('login');

	}

	public function loginUser(){

		$email = Input::get('email');
		$password = Input::get('password');

		$user = User::where('email', '=', $email)->first();

		if($user->password == $password){

			return "Success!";
		}else{
			return "Failure!";
		}

	}

	public function showUsers(){


		//finds a user with id = 1;
		//$user = User::find(1);

		$user = User::where('username', '=', 'akhil')->first();


		$user->name = "Bleh";
		$user->save();

		//$user->delete();

		User::create([
			'name'	=> 'Akhil 2',
			'username'	=> 'amantrip',
			'password'	=> '12345',
			'gender'	=> 'male'
		]);

		//all users
		$users = User::all();

		return $users;

	}

}
