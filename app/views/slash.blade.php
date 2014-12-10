@extends('layouts.master')
@section('content')
    <head>
        <title>Slash A Pseudoroid</title>

        <link href='http://fonts.googleapis.com/css?family=Monofett' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <style>

                h1{
                    font-family: 'Monofett', cursive;
                }

                .grid{
                height: 602px;
                width: 662px;
                /*border: solid black 1px;*/
                }

                .box{
                    width: 220px;
                    height: 200px;
                    /*border: solid white 1px;*/
                    float: left;
                    position: center;
                }

                .pseudoroid {
                    display: none;
                    cursor: url(images/slash2.gif), default;
                }

                .counter, .score{
                    font-size: 30px;
                    color: black;
                }

                body
                {
                background-image: url(/images/418236.jpg);
                background-size: cover;
                background-position: center top left;
                background-repeat: no-repeat;
                cursor: url(images/slash2.gif), default;
                }


                .opening{
                background-image: url(/images/zero & x.jpg);
                background-size: 100%;
                }
                
                button {
                    cursor: url(images/slash2.gif), default;
                }

        </style>



        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <script>
            $('document').ready(function(){
                var boxes = $('.box');
                var counter = 45;
                var interval = 1000;
                var score = 0;
                var pseudoroid = $('.pseudoroid');
                var gridnum;



                
                $(pseudoroid).click(function(){
                    $(this).fadeToggle();
                    $("body").css('background-image', src='/images/418236.jpg');
                });


                $('button').click(function(){

                    $('#fight').trigger('play');
                    var intervalId = setInterval(function()
                    {
                            $('.pseudoroid').fadeOut();

                            counter--;
                            $(".counter").html('Time ' + counter);
                        

                            if (counter == 0) {
                                $('#megatheme').trigger('play');
                                clearInterval(intervalId);
                                $('.score').text('Congradulations! ' + score + ' Pseudoroids were destroyed.').css('text-align', 'center');
                            }


                            else {
                                var random = Math.floor((Math.random()* pseudoroid.length));
                                var randImg = pseudoroid[random];

                                $(pseudoroid[random]).fadeIn(350);
                            } 
                    },interval);

                });



                $('.pseudoroid').click(function(){
                    score += 1;
                    $('.score').text('Score ' + score);
                    $(gridnum).hide();
                    var linkId = $(this).parent('a').attr('id');
                    
                    var linkIdSplit = linkId.split("-");
                             
                    $("#" + linkIdSplit[1]).trigger("play");
                });
            });

        </script>
    </head>
    <body>
        <div align="center">
            <h1><a href="http://megaman.wikia.com/wiki/Pseudoroid">Slash A Pseudoroid</a></h1>

                <button class ="btn-primary btn-sm btn-danger">START</button>

                <audio class="audio-player" id="megatheme" src="sounds/MM2Death.wav"></audio>
                <audio class='audio-player' id='slash' src='sounds/metaknight064.mp3'></audio>
                <audio class='audio-player' id='fight' src='sounds/CannonBall-HardRevenge-OmegaTheme.mp3'></audio>
            
              

                <div class="grid">

                    <h4 class="counter" id='timer'>Time</h4>

                    <h4 class="score">Score</h4>

                    <div class="box">
                        <a id='play-slash' href="#"><img class="pseudoroid" src="/images/hivolt_appear.gif"></a>
                    </div>
                    <div class="box">
                        <a id='play-slash' href="#"><img class="pseudoroid" src="/images/wolf_appear.gif"></a>
                    </div>
                    <div class="box">
                        <a id='play-slash' href="#"><img class="pseudoroid" src="/images/spin_appear.gif"></a>
                    </div>
                    <div class="box">
                        <a id='play-slash' href="#"><img class="pseudoroid" src="/images/monkey_appear.gif"></a>
                    </div>
                    <div class="box">
                        <a id='play-slash' href="#"><img class="pseudoroid" src="/images/horse_appear.gif"></a>
                    </div>
                    <div class="box">
                        <a id='play-slash' href="#"><img class="pseudoroid" src="/images/hellbat_appear.gif"></a>
                    </div>
                    <div class="box">
                        <a id='play-slash' href="#"><img class="pseudoroid" src="/images/death_mantis_appear.gif"></a>
                    </div>

                    <div class="box">
                        <a id='play-slash' href="#"><img class="pseudoroid" src="/images/berian_appear.gif"></a>
                    </div>
                    <div class="box">
                        <a id='play-slash' href="#"><img class="pseudoroid" src="/images/purple_appear.gif"></a>
                    </div>

                </div>

        </div>

            <audio autoplay>
                <source src='/sounds/MMZX WARNING.mp3'>
            </audio>
    </body>
    </html>
@stop
