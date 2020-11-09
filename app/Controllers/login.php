<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class login extends BaseController
{
	public function index()
	{
		$userModel= new UserModel($db);
		$user=$userModel->find('1');
		var_dump($user);
		$estructura = view('login',$user);
		return $estructura;
	}

	public function register()
	{
		return view('register');
	}

}
