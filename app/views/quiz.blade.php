@extends('layouts.master')

@section('content')

          <div class="jumbotron">
              <div class="container">
                <h1>Test Me</h1>
                <p>This is a template for a simple marketing or informational website.</p>
              </div>
        </div>
        
        <div class="container">
            <div id="quiz">
                <div id="question1">
                    <div class="question">
                        Which is not a main file type that we use to make websites?
                    </div>
                    <input type="radio" name="question1" value="a"/>
                    <label>.html</label><br>
                    <input type="radio" name="question1" value="b"/>
                    <label>.exe</label>
                </div>
            </div>
            
        </div>

@stop
