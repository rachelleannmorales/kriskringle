<?php

class RandomsController extends BaseController {

	public function index()
	{
		return View::make('randoms.index');
	}

	public function store()
	{
		$id = Request::get('id');
		$data = DB::select("call random(?)",array($id));
		$data = json_decode(json_encode($data),TRUE);	
		$pick = $data[0]['id'];
		DB::select("call add_monito_monita(?,?)",array($id,$pick));
		return Response::json(array($data));
	}
}
