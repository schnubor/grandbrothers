<?php

class ImagesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /images
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /images/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /images
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::only('poster');
		$file = Input::file('poster');

		// validate the form
		$validator = Validator::make($input, [
			'poster' => 'mimes:jpeg|max:2000'
		]);

		list($width, $height) = getimagesize($file);

		// if invalid, go back
		if($validator->fails() || $width != 1280 || $height != 1920){
			return Redirect::back()->withErrors($validator);
		}

		$destinationPath = public_path().'/images/';
		$filename = 'poster.jpg';
		Input::file('poster')->move($destinationPath, $filename);

		return Redirect::back();
	}

	/**
	 * Display the specified resource.
	 * GET /images/{id}
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
	 * GET /images/{id}/edit
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
	 * PUT /images/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /images/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
