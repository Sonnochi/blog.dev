<!DOCTYPE html>
<html lang="en">
<head>

<style type="text/css">
    body
    {
        padding-top: 60px; 
    }
</style>

    <title>Laravel Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    @yield('topscript')
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
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="{{ action('PostsController@index') }}"></a>Posts</li>
            
            @if (Auth::check()) 
                <li><a href="{{ action('PostsController@create') }}">Create New Post</a></li>
            @endif
            
            <li><a href="{{ action('HomeController@portfolio') }}">Portfolio</a></li>
            <li><a href="{{ action('HomeController@resume') }}">Resume</a></li>
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
