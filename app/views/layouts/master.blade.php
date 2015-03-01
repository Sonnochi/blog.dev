<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
        <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">J. Farmer</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{ action('HomeController@welcome') }}">Home</a></li>
            <li><a href="{{ action('HomeController@quiz')}}">Test Me</a></li>
            <li><a href="{{ action('HomeController@slash') }}">Slash-A-Pseudoroid</a></li>
            <li><a href="{{ action('PostsController@index') }}">Posts</a></li>
            
            @if (Auth::check()) 
                <li><a href="{{ action('PostsController@create') }}">Create New Post</a></li>
            @endif
            
            <li><a href="{{ action('HomeController@portfolio') }}">Portfolio</a></li>
            <li><a href="{{ action('HomeController@resume') }}">Resume</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{{ action('HomeController@showLogin') }}}">Login</a></li>
                @else
                        <li>Welcome {{{ Auth::user()->email }}}</li>
                @endif
          </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
    
    <div class="container">
        @if (Session::has('successMessage'))
            <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
        @endif

        @if (Session::has('errorMessage'))
            <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
        @endif
        
        @yield('content')
    </div>
    
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

@yield('bottomscript')
    
</body>
</html>
