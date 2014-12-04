@extends('Layouts.master')
@section('content')
<div class="container">

    <div class="container" id="blog-create">
    
            <div class="container" id="title">
                @foreach($posts as $post)
                
                <p class="heading">
                    {{ $post->id }}
                    {{ $post->title }}
                    {{ $post->created_at->diffForHumans() }}
                </p>
            </div>
            
            <div class="container" id="body">
                <p id="blog-entry">
                    {{ $post->body }}
                </p>
                
                @endforeach
            </div>
            {{ $posts->links() }}
    </div>
</div>


@stop
