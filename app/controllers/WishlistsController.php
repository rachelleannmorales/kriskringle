<?php

class WishlistsController extends BaseController {

	public function index()
	{
		return View::make('wishlists.index');
	}

	public function store()
	{
		$id = Input::get('id');
		$wish1 = Input::get('wish_1');
		$wish2 = Input::get('wish_2');
		$wish3 = Input::get('wish_3');

		DB::select("call add_wish(?,?,?,?)",array($wish1,$wish2,$wish3,$id));
		DB::select("call update_user(?,?)",array($id,2));
		return View::make('logins.index');
		
	}
}
