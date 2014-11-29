<?php

class NewsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /news
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /news/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /news
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::only('title','author','body');

		// validate the form
		$validator = Validator::make($input, [
			'title' => 'required',
			'body' => 'required'
		]);

		// if invalid, go back
		if($validator->fails()){
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$post = News::create([
			'title' => Input::get('title'),
			'author' => Input::get('author'),
			'body' => Input::get('body')
		]);
		
		if($post){
			return Redirect::back();
		}

		return Redirect::back()->withErrors($validator)->withInput();
	}

	/**
	 * Display the specified resource.
	 * GET /news/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /news/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /news/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /news/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = News::find($id);

		if ($post->delete()) {
			return Redirect::back();
		}
	}

}