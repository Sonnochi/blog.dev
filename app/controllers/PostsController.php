<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the posts.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::paginate(2);
		return View::make('post.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new posts.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('post.create');
	}


	/**
	 * Store a newly created posts in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// create the validator
    	$validator = Validator::make(Input::all(), Post::$rules);
    	
    	if($validator->fails()) {
    		
		return Redirect::back()->withInput()->withErrors($validator);
		
    	} else {
		$post = new Post();
        $post->title = Input::get('title');
        $post->body = Input::get('body');
        
        $post->save();
        
        return Redirect::action('PostsController@show', $post->id);
    	} 
	}


	/**
	 * Display the specified posts.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		return View::make('post.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified posts.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		
		return View::make('post.edit')->with('post', $post);
	}


	/**
	 * Update the specified posts in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);
		
		$post->title = Input::get('tile');
		$post->body = Input::get('body');
		
		$post->save();
		
		return Redirect::back();
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
