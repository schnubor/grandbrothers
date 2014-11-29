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
		$posts = News::all();

		$activeUser = Auth::user();

		return View::make('backend.index')
			->with('users', $users)
			->with('posts', $posts)
			->with('activeUser', $activeUser);
	}

}