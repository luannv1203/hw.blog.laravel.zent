@extends('layout.master')

@section('content')
<section class="tada-container content-posts page post-right-sidebar">
	<div class="content col-xs-8">
        
        
        	<!-- ARTICLE 1 -->
        	<article>
            	<div class="post-image">
                	<img src="{{ $post->thumbnail}}" alt="post image 1"> 
                </div>
                <div class="post-text">
                    <h2>{{$post->title}}</h2>
                </div>                 
                <div class="post-text text-content">                  
                	<div class="text"><p>
                	{{$post->description}}             	
					</p>                    
                    <p>{{$post->content}}</p>
                    
                    <div class="clearfix"></div>
                    </div>
                </div>
            
            
       	 	</article>
        
        
        </div>
@endsection