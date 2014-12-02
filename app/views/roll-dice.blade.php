
@extends('layouts.master')

@section('content')

    <h1>Roll Dice</h1>
    <h2>You guessed a {{{ $guess }}}</h2>
    <h2>You rolled a {{{ $roll }}} </h2>
    
    @if ($roll == $guess)
        <h1>Good job! Great guess!</h1>
    @else
        <h1>You didn't get it. Try again.</h1>
    @endif
@stop
