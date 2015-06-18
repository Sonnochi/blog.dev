@extends('layouts.master')

@section('content')
<script >
    if (jQuery) {
        var checkAnswers = function(){
            var answerString = "";
            var answers = $(":checked");
            
        }
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
                    <input type="radio" name="question1" value="d"/>
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
                    <input type="radio" name="question2" value="d"/>
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
                    <input type="radio" name="question3" value="d"/>
                    <label>All the above</label><br>
                </div><br>
                <div id="question4">
                    <div class="question">
                        The gravitational constant on earth is approximately...
                    </div>
                        <input type="radio" name="question4" value="a"/>
                        <label>10m/s^2</label><br>
                        <input type="radio" name="question4" value="b"/>
                        <label>.809m/s^2</label><br>
                        <input type="radio" name="question4" value="c"/>
                        <label>9.8m/s^2</label><br>
                        <input type="radio" name="question4" value="d"/>
                        <label>84.4m/s^2</label><br>
                </div><br>
                <div id="question5">
                    <div class="question">
                        In Japanese "か" is prounounced...
                    </div>
                        <input type="radio" name="question4" value="a"/>
                        <label>ka</label><br>
                        <input type="radio" name="question4" value="b"/>
                        <label>ko</label><br>
                        <input type="radio" name="question4" value="c"/>
                        <label>ke</label><br>
                        <input type="radio" name="question4" value="d"/>
                        <label>ki</label><br>
                </div><br>
                <div id="question6">
                    <div class="question">
                        45 (in base 10) is what in binary (base 2)?
                    </div>
                        <input type="radio" name="question6" value="a"/>
                        <label>101101</label><br>
                        <input type="radio" name="question6" value="b"/>
                        <label>110011</label><br>
                        <input type="radio" name="question6" value="c"/>
                        <label>011101</label><br>
                        <input type="radio" name="question6" value="d"/>
                        <label>101011</label><br>
                </div><br>
                <div id="question7">
                    <div class="question">
                        4 x 2 = ...
                    </div>
                        <input type="radio" name="question7" value="a"/>
                        <label>16</label><br>
                        <input type="radio" name="question7" value="b"/>
                        <label>4</label><br>
                        <input type="radio" name="question7" value="c"/>
                        <label>2</label><br>
                        <input type="radio" name="question7" value="d"/>
                        <label>8</label><br>
                </div><br>
                <div id="question8">
                    <div class="question">
                        Given the lengths of two sides of a right triangle (one with a 90 degree angle), how would you find the hypotenuse?
                    </div>
                        <input type="radio" name="question8" value="a"/>
                        <label>Pi*Radius^2</label><br>
                        <input type="radio" name="question8" value="b"/>
                        <label>Pythagorean Theorem</label><br>
                        <input type="radio" name="question8" value="c"/>
                        <label>Calculator?</label><br>
                        <input type="radio" name="question8" value="d"/>
                        <label>Sin(side1 + side2)</label><br>
                </div><br>
                <div id="question9">
                    <div class="question">
                        True or False: All games must run at at least 60 frames per second to be any good.
                    </div>
                        <input type="radio" name="question9" value="a"/>
                        <label>True</label><br>
                        <input type="radio" name="question9" value="b"/>
                        <label>False</label><br>
                </div><br>
                <div id="question10">
                    <div class="question">
                        Using a server can help you to...
                    </div>
                        <input type="radio" name="question10" value="a"/>
                        <label>hide your code.</label><br>
                        <input type="radio" name="question10" value="b"/>
                        <label>have a performant game.</label><br>
                        <input type="radio" name="question10" value="c"/>
                        <label>create shared experiences for players.</label><br>
                        <input type="radio" name="question10" value="d"/>
                        <label>all of the above.</label>
                </div>
            </div>
            
        </div>

@stop
