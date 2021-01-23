<?php

namespace App\Http\Controllers;

use App\Models\LikeDislike;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Comments;
use App\Models;
use App;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getPost(){
        $posts = Models\post::paginate(6);
        return view('posts.postlist', compact('posts'));
    }


    public function post(Request $request){
        if ($request->ajax()){
            $user = Auth()->user();
            $post = new Post;

            $post->userid = $user->id;
            $post->post = $request->input('post');

            $post->save();

            return response($post);
        }
    }

    public function getComment(Request $request){
        if ($request->ajax()){
            $comments =  DB::table('comments')
                ->join('users', 'users.id', '=', 'comments.user_id')
                ->select('comments.id as comment_id', 'comments.*', 'users.id as user_id', 'users.*')
                ->where('post_id', '=', $request->id)
                ->get();

            return view('posts.commentslist', compact('comments'));
        }
    }

    public function makeComment(Request $request){
        if ($request->ajax()){
            $user = Auth()->user();

            $comment = new Comments;
            $comment->author_id = 2;
            $comment->user_id = $user->id;
            $comment->id_posts = $request->postid;
            $comment->message = $request->commenttext;
            $comment->email_user = $user->email;
            $comment->save();

            return response($comment);
        }
    }
}
