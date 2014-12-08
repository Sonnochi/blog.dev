@extends('Layouts.master')

@section('content')
{{ Form::open(['action' => 'HomeController@doLogin']) }}

{{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'eMail']) }}
{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}

{{ Form::submit('Log In')}}

{{ Form::close() }}
@stop