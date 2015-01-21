<?php
class AuthController extends \BaseController {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	public function index()
	{
		return \View::make('main.index')->with('subjects', Subject::all());
	}

	public function getLogin()
	{
		//$user = User::find('xlvecle');
		//echo $user->username;
		if (Auth::user()) {
			echo "you have logged";
		}
		else {
			return \View::make('admin.login');
		}
		
	}

	public function postLogin()
	{
		$user = User::find(Input::get('username'));
		if ($user->password == Input::get('password')) {
			Auth::login($user);
			return Redirect::to('admin');
		}
		else {
			echo "wrong passwd or username!";
		}
	}

	public function getLogout()
	{
		Auth::logout();
		return Redirect::to('admin/login');
	}
}