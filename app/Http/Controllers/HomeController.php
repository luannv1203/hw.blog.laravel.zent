<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class HomeController extends Controller
{
    public function index(){
    	$posts = Post::Paginate(5);
    	return view('pages.index',['posts'=>$posts]);
    }

    public function show($id){
    	$post = Post::find($id);

    	return view('pages.detail',['post'=>$post]);
    }

    public function post(){
    	$posts = Post::simplePaginate(10);

    	return view('pages.post',['posts'=>$posts]);
    }
}
