<?php namespace App\Http\Controllers;

use Request;
use App\Models\User;

class UserController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Customer Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	public function viewAll() {

	}

	public function view($id) {

	}

	public function create() {

	}

	public function postCreate() {
		$user = new User();
		$user->first_name = Request::input('first_name');
		$user->last_name = Request::input('last_name');
		$user->email = Request::input('email');
		$user->phone = Request::input('phone');
		$user->save();

		return redirect('users');
	}

	public function update($id) {

	}

	public function postUpdate($id) {

	}

	public function delete($id) {

	}

}
