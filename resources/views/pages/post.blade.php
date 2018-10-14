@extends('layout.master')

@section('content')
	<section class="tada-container content-posts blog-2-columns blog-2-columns-sidebar">


      <!-- CONTENT -->    
      <div class="content col-xs-8">
    
    
    	@foreach($posts as $post)
			<div class="col-xs-6">
  
      
	        	<!-- ARTICLE 1 -->      
	        	<article>
	            	<div class="post-image">
	                	<img src="{{$post->thumbnail}}" alt="post image 1">
	                    <div class="category"><a href="#">IMG</a></div>
	                </div>
	                <div class="post-text">
	                	<span class="date">{{$post->created_at}}</span>
	                    <h2><a href="blog/{{$post->id}}">{{$post->title}}</a></h2>
	                    <p class="text">{{$post->description}}
	                                    <a href="blog/{{$post->id}}"><i class="icon-arrow-right2"></i></a></p>                                 
	                </div>
	                <div class="post-info">
	                	<div class="post-by">Post By <a href="#">AD-Theme</a></div>
	                </div>
	            </article>
	        
	       </div>
    	@endforeach
    	{!!$post->links()!!}
        
   		<div class="clearfix"></div>
@endsection