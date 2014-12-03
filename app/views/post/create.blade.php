@extends('Layouts.master')
@section('content')


    {{ Form::open(array('action' => 'PostsController@store')) }}
        {{ Form::text('title', Input::old('title')) }}
        {{ Form::textarea('body', Input::old('body')) }}


        <button type="submit" >Submit</button>
         
    {{Form::close()}}
    
    <a href="{{ action('PostsController@index') }}">List Post</a>

@stop
