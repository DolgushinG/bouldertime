<?php

namespace App\Http\Controllers;
use App\Models;

class PostsController extends Controller
{
    public function index(){
        $posts = Models\post::paginate(6);
        return view('posts.index', compact('posts'));
    }
    public function show($id){
        $post = Models\post::find($id);
        return view('posts.show', compact('post'));
    }

}
