@extends('layouts.master')

@section('content')
<script >
    if (jQuery) {
        var 
    };
</script>
          <div class="jumbotron">
              <div class="container">
                <h1>Test Me</h1>
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
                    <label>.exe</label><br>
                    <input type="radio" name="question1" value="c"/>
                    <label>.js</label><br>
                    <input type="radio" name="question1" value="b"/>
                    <label>.css</label><br>
                </div><br>
                <div id="question2">
                    <div class="question">
                        A JavaScript object is wrapped by what characters?
                    </div>
                    <input type="radio" name="question2" value="a"/>
                    <label>[ ]</label><br>
                    <input type="radio" name="question2" value="b"/>
                    <label>; ;</label><br>
                    <input type="radio" name="question2" value="c"/>
                    <label>{ }</label><br>
                    <input type="radio" name="question2" value="b"/>
                    <label>( )</label><br>
                </div><br>
                <div id="question3">
                    <div class="question">
                        Moles are which of the following?
                    </div>
                    <input type="radio" name="question3" value="a"/>
                    <label>Omniverous</label><br>
                    <input type="radio" name="question3" value="b"/>
                    <label>Adorable</label><br>
                    <input type="radio" name="question3" value="c"/>
                    <label>Whackable</label><br>
                    <input type="radio" name="question3" value="b"/>
                    <label>All the above</label><br>
                </div>
            </div>
            
        </div>

@stop
