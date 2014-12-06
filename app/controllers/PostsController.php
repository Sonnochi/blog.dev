<?php

class PostsController extends \BaseController {
	
	public function __construct()
	{
		parent::__construct();
		
		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

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
		$post = new Post();
        
        return $this->savePost($post);

	}


	/**
	 * Display the specified posts.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		try{
			
		$post = Post::findOrFail($id);
		
		} catch(Exception $e) {
			App::abort(404);
		}
		
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
		
		return $this->savePost();
	}


	/**
	 * Remove the specified posts from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::findOrFail($id);
		
		$post->delete();
		
		return Redirect::action('PostsController@index');
	}
	
	protected function savePost(Post $post)
	{
		$validator = Validator::make(Input::all(), Post::$rules);
		
		if ($validator->fails()){
			Log::error('Failed to save post!', Input::all());
			
			return Redirect::back()->withInput()->withErrors($validator);
		}
		
		$post->title = Input::get('title');
		$post->body = Input::get('body');
		$post->save();
		
		Session::flash('successMessage', 'Post saved successfully!');
		
		return Redirect::action('PostsController@show', $post->id);
	}


}
