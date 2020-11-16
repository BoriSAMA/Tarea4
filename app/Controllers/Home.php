<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends BaseController
{

	public function index()
	{
		//return view('login');
		return view('structure/header').view('newPet').view('structure/footer');
	}

	//--------------------------------------------------------------------

}
