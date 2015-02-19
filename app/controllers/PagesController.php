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
		$post = News::orderBy('created_at', 'DESC')->get()->last();;
		$dates = Date::all();

		return View::make('pages.home')
			->with('post',$post)
			->with('dates',$dates);
	}

}