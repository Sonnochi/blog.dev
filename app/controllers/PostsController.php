<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the posts.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();
		return View::make('posts.index')->with('posts', $posts);
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
		$post = new Post();
		if(Input::has('title') && Input::has('body'))
		{
		$post = new Post();
        $post->title = Input::get('title');
        $post->body = Input::get('body');
        $post->save();
        
        return Redirect::action('PostsController@show', $post->id);
    	} 
    	return 'Try again';
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
