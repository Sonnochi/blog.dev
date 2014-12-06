@extends('Layouts.master')
@section('content')

@if($errors->has('tile'))
    $errors->first('title', '<span class="help-block">:message</span>');
@endif

@section('content')
    <div class="container" id="blog-create">
        
        <div class="form-group" id="title">
            {{ Form::open(array('action' => 'PostsController@store')) }}
                {{ $errors->first('title', '<span class="help-block">:message</span>') }}
            <p><label for="title">Blog Title</label><br>
                {{ Form::text('title', Input::old('title')) }}</p>
        </div>

        <div class="form-group" id="body">
                {{ $errors->first('body', '<span class="help-block">:message</span>') }}
            <p><label for="body">Blog Body</label><br>
                {{ Form::textarea('body', Input::old('body')) }}</p>
        </div>
                


                <button type="submit" >Submit</button>
                 
            {{Form::close()}}
    </div>


@stop
