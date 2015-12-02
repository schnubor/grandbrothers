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
		$input = Input::only('date','country','city','location');

		// validate the form
		$validator = Validator::make($input, [
			'date' => 'required'
		]);

		// if invalid, go back
		if($validator->fails()){
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$post = Date::create([
			'date' => Input::get('date'),
			'country' => Input::get('country'),
			'city' => Input::get('city'),
			'location' => Input::get('location')
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
		$input = Input::only('date','country','city','location');

		// validate the form
		$validator = Validator::make($input, [
			'country' => 'max:20'
		]);

		// if invalid, go back
		if($validator->fails()){
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$id = Input::get('id');
		$date = Input::get('date');
		$country = Input::get('country');
		$city = Input::get('city');
		$location = Input::get('location');

		$gig = Date::find($id);
		$gig->date = $date;
		$gig->country = $country;
		$gig->city = $city;
		$gig->location = $location;

		if($gig->save()){
			return Redirect::back();
		}

		return Redirect::back()->withErrors($validator)->withInput();
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
