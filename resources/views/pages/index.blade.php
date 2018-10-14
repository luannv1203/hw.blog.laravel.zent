@extends('layout.master')

@section('content')
<section class="tada-container content-posts">
	<!-- CONTENT -->
    	<div class="content col-xs-8">
        
        
        	<!-- ARTICLE 1 -->       
        	@foreach($posts as $post)
                <article>
                    <div class="post-image">
                        <img src="{{ $post->thumbnail }}" alt="post image 1">
                        <div class="category"><a href="#">IMG</a></div>
                    </div>
                    <div class="post-text">
                        <span class="date">{{ $post->created_at}}</span>
                        <h2><a href="blog/{{$post->id}}">{{ $post->title}}</a></h2>
                        <p class="text">{{ $post->description}}
                                        <a href="blog/{{$post->id}}""><i class="icon-arrow-right2"></i></a></p>                                 
                    </div>
                    <div class="post-info">
                        <div class="post-by">Post By <a href="#">AD-Theme</a></div>
                        <div class="extra-info">
                            <a href="#"><i class="icon-facebook5"></i></a>
                            <a href="#"><i class="icon-twitter4"></i></a>
                            <a href="#"><i class="icon-google-plus"></i></a>
                            <span class="comments">25 <i class="icon-bubble2"></i></span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </article>
            @endforeach
        
            <!-- NAVIGATION -->
                
            {!! $posts->links() !!}
        
        </div>          
        
        
        	
@endsection