@extends('Layouts.master')
@section('content')

@if($errors->has('tile'))
    $errors->first('title', '<span class="help-block">:message</span>');
@endif

    {{ Form::open(array('action' => 'PostsController@store')) }}
    
        {{ $errors->first('title', '<span class="help-block">:message</span>') }}
        {{ Form::text('title', Input::old('title')) }}
        
        {{ $errors->first('body', '<span class="help-block">:message</span>') }}
        {{ Form::textarea('body', Input::old('body')) }}


        <button type="submit" >Submit</button>
         
    {{Form::close()}}
    
    <a href="{{ action('PostsController@index') }}">List Post</a>

@stop
