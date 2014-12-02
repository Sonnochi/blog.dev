<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the posts.
	 *
	 * @return Response
	 */
	public function index()
	{
		return 'this is the function for index.';
	}


	/**
	 * Show the form for creating a new posts.
	 *
	 * @return Response
	 */
	public function create()
	{
		return 'this is the function for create.';
	}


	/**
	 * Store a newly created posts in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified posts.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return 'this is the show funtion for $id';
	}


	/**
	 * Show the form for editing the specified posts.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return 'this is the edit funtion for $id';
	}


	/**
	 * Update the specified posts in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified posts from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
