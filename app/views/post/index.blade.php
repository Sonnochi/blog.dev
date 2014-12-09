@extends('layouts.master')
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
                <button class="btn btn-danger delete-btn" data-post-id="{{{ $post->id }}}">Delete</button>
                
                @endforeach
            </div>
            {{ $posts->links() }}
            
            {{ Form::open(['method' => 'delete', 'id' => 'delete-form']) }}
            {{ Form::close() }}
    </div>
</div>


@stop

@section('bottomscript')

    <script type="text/javascript">
    $(".delete-btn").click(function(){
        var postId = $(this).data('post-id');
        
        $("#delete-form").attr('action', '/posts/' + postId);
        
        if (confirm('Are you sure you want to delete this post?')){
            $("#delete-form").submit();
        }
    });
    </script>
    
@stop
