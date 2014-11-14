<?php
	class UserController extends BaseController{
		protected $id;

		public function login(){
		 $usernameInput = Input::get('txtUsername');
		 $passwordInput = Input::get('txtPassword');
		
	
		 $usertry = array(
		 	'username' => $usernameInput,
		 	'password'	=>  $passwordInput
		 	);
		
		 if (Auth::attempt($usertry)){ 
		 	 $check = Auth::User()->username;	
		 	 if($check=='admin') return View::make('addadmin'); //check สิทธิ์การเข้าถึง
		 	 else return View::make('home');
		 } //$user=Auth::validate(Input::all());
		 else return View::make('login');
	}

	public function register(){
		$validator= Validator::make(Input::all(),
				array(
					"username"=>"unique:users|required",
						"password"=>"required",
					//"phonenum"=>"unique:users",
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

	public function logout(){
		Auth::logout();
		return Redirect::to('home');
	}

	public function show(){
   		 $users = User::all();

   		 foreach($users as $user){
   		 	var_dump($user->username);


   		 }



   		 return View::make('edit')->withUser($user);
	}

	public function editTel(){

		//$pass = Input::get('password');
		$telephone = Input::get('phonenum');

		$id = Auth::User()->id;

		//Auth::User()->tel=$telephone;

		//$this->user = Auth::user();

		//$user->password =  Hash::make($pass);
		//$user->tel = $telephone;

		User::where('id',$id)->update(array(
			'tel'=>$telephone,
			));

		return Redirect::to('editformMember');

	}

		public function editPass(){

		$pass = Hash::make(Input::get('password'));
		$id = Auth::User()->id;

		//Auth::User()->tel=$telephone;

		//$this->user = Auth::user();

		//$user->password =  Hash::make($pass);
		//$user->tel = $telephone;

		User::where('id',$id)->update(array(
			'password'=>$pass
			));

		return Redirect::to('editformMember');

	}

	}
?>