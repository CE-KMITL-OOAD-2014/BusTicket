<?php
	class UserController extends BaseController{

		public function login(){
		 $usernameInput = Input::get('txtUsername');
		 $passwordInput = Input::get('txtPassword');
		
		
		 $usertry = array(
		 	'username' => $usernameInput,
		 	'password'	=>  $passwordInput
		 	);
		
		 if (Auth::attempt($usertry))return View::make('home');
		 else return View::make('login');
	}

	public function register(){
		$username = Input::get('username');
		$name = Input::get('name');
		$password = Input::get('password');
		$telephone = Input::get('phonenum');

		$newUser = new User();
		$newUser->username = $username;
		$newUser->password = Hash::make($password);
		$newUser->name = $name;
		$newUser->tel = $telephone;
		$newUser->save();
		return Redirect::to('fin');
	}
public function logout(){
		Auth::logout();
		return Redirect::to('home');
	}

	
	}
?>