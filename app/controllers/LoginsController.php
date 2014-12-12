<?php

class LoginsController extends BaseController {

	public function index()
	{
		return View::make('logins.index');
	}

	public function store()
	{
		$username = Input::get('username');
		$password = Input::get('password');

		$data = DB::select("call login(?,?)",array($username,$password));
		$data = json_decode(json_encode($data),TRUE);
		if($data[0]['status'] == 1)
		{	
			return View::make('wishlists.index',array('id'=>$data[0]['id']));
		}
		else if($data[0]['status'] == 2)
		{	
			return View::make('randoms.index',array('id'=>$data[0]['id']));
		}
		else
		{
			print_r("Tapos ka na eh :)");
		}

	}
}
