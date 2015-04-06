<?php

class PagesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /pages
	 *
	 * @return Response
	 */
	public function home()
	{
		$posts = News::orderBy('created_at', 'DESC')->take(3)->get();
		$dates = Date::all();

		return View::make('pages.home')
			->with('posts',$posts)
			->with('dates',$dates);
	}

}