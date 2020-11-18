<?php namespace App\Controllers;

class HolaMundo extends BaseController
{
	public function index()
	{
		return view('vista_holamundo');
	}


    public function desdeSub()
	{
        $datos['llave1']='dato 1';
		return view('vista_holamundo',$datos);
	}
	//--------------------------------------------------------------------

}
