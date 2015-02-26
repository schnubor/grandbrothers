<?php

class DatesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /dates
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /dates/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /dates
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::only('gigTitle','author','body','location','price','date','link');

		// validate the form
		$validator = Validator::make($input, [
			'gigTitle' => 'required'
		]);

		// if invalid, go back
		if($validator->fails()){
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$post = Date::create([
			'title' => Input::get('gigTitle'),
			'author' => Input::get('author'),
			'body' => Input::get('body'),
			'location' => Input::get('location'),
			'price' => Input::get('price'),
			'date' => Input::get('date'),
			'link' => Input::get('link')
		]);
		
		if($post){
			return Redirect::back();
		}

		return Redirect::back()->withErrors($validator)->withInput();
	}

	/**
	 * Display the specified resource.
	 * GET /dates/{id}
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
	 * GET /dates/{id}/edit
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
	 * PUT /dates/{id}
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
	 * DELETE /dates/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$date = Date::find($id);

		if ($date->delete()) {
			return Redirect::back();
		}
	}

}