<?php

class BackendController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /backend
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
		return View::make('backend.index')
			->with('users', $users);
	}

}