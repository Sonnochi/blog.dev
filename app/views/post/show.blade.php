@extends('Layouts.master')
@section('content')


    <p>
        {{ $post->id }}
        {{ $post->title }}
        {{ $post->body }}
    </p>


@stop
