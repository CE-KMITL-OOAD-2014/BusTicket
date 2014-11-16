<?php
class UserController extends BaseController{

	//user log in
	public function login(){
		$usernameInput = Input::get('txtUsername');
		$passwordInput = Input::get('txtPassword');
		
		$usertry = array(
			'username' => $usernameInput,
			'password'	=>  $passwordInput
			);
		if (Auth::attempt($usertry)){ 
			$check = Auth::User()->username;	
			if($check=='admin') return View::make('homeAdmin');
			else return View::make('home');
		} 
		else return Redirect::to('/');
	}

	//registration for user
	public function register(){
		$validator= Validator::make(Input::all(),
			array(
				"username"=>"unique:users|required",
				"password"=>"required",

				));

		if($validator->fails()){
			return Redirect::to('register');

		}else{

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

	}

	//user log out
	public function logout(){
		Auth::logout();
		return Redirect::to('/');
	}

	//edit telephone number for user
	public function editTel(){
		$telephone = Input::get('phonenum');
		$id = Auth::User()->id;

		User::where('id',$id)->update(array(
			'tel'=>$telephone,
			));
		return Redirect::to('editformMember');
	}

	//edit password for user
	public function editPass(){
		$pass = Hash::make(Input::get('password'));
		$id = Auth::User()->id;

		User::where('id',$id)->update(array(
			'password'=>$pass
			));

		return Redirect::to('editformMember');
	}

	//edit name for user 
	public function editName(){

		$name = Input::get('name');
		$id = Auth::User()->id;

		User::where('id',$id)->update(array(
			'name'=>$name
			));
		return Redirect::to('editformMember');
	}

}
?>