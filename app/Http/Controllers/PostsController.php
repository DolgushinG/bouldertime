<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;
use App\Models;
use App\Models\LikeDislike;
use App;
use App\Http\Requests\CommentsRequest;
use App\Http\Requests\postRequest;
use App\Models\Post;

class PostsController extends Controller
{
public function index()
{
    $newPost = App\Models\Post::latest('created_at')->where('status', '=', 'PUBLISHED')->first();
    $posts = Models\post::where('status', '=', 'PUBLISHED')->paginate(6);
    return view('posts.index', compact('posts', 'newPost'));
}

public function saveLikeDislike(postRequest $request)
{
    $likePost = App\Models\LikeDislike::where('post_id','=', $request->post)->get();
    $likeCheckInPost = App\Models\LikeDislike::where('post_id','=', $request->post)->first();

    $data = new LikeDislike;
    if($likeCheckInPost !== null){
        foreach($likePost as $like){
            if($like->user_ip === $request->ip()){
                if($like->like == 1 && $request->type === 'like'){
                    App\Models\LikeDislike::find($like->id)->delete();
                    return response()->json([
                        'bool' => false
                    ]);
                } else if ($like->dislike == 1 && $request->type === 'dislike') {
                    App\Models\LikeDislike::find($like->id)->delete();
                    return response()->json([
                        'bool' => false
                    ]);
                } 
            }
                
            if ($like->user_ip !== $request->ip()){
                
                if ($request->type === 'like'){
                    $data->like = 1;
                } else {
                    $data->dislike = 1;
                }
                $data->post_id = $request->post;
                $data->user_ip = $request->ip();
                $data->save();
                return response()->json([
                        'bool' => true
                ]);
            }
        } 
    } else {
        if ($request->type === 'like'){
            $data->like = 1;
        } else {
            $data->dislike = 1;
        }
        $data->post_id = $request->post;
        $data->user_ip = $request->ip();
        $data->save();
        return response()->json([
                'bool' => true
        ]);
    }

}


public function sendEditComment($id_post, $id_comment, CommentsRequest $request)
{
    $comment = App\Comments::find($id_comment);
    $comment->id_posts = intval($id_post);
    $comment->author_id = 2;
    $comment->message = $request->input('message');
    $comment->name_user = Auth()->user()->name;
    $comment->user_id = Auth()->user()->id;
    $comment->email_user = Auth()->user()->email;

    $comment->save();

    return redirect()->route('show', $id_post)->with('success', 'Изменения сохранены');
}

public function editComments($id_post, $id_comment)
{
    $comment = App\Comments::find($id_comment);
    $post = Models\Post::find($id_post);
    return view('posts.editComments', compact('comment', 'post'));
}

public function deleteComment(Request $request)
{
    if ($request->ajax()) {
        $comment = new Comments;
        $id_comment = $request->input('comment');
        App\Comments::find($id_comment)->delete();
        return response($comment);
    }
}

public function show(Post $post, Request $request)
{
    $postStatus = Models\Post::find($post);
    if($postStatus[0]['status'] !== 'PUBLISHED') {
        return redirect('/');
    }
    $users = App\Models\User::all();
    $comments = App\Comments::where('id_posts', '=', $post->id)->get();
    views($post)->record();
    $likes = LikeDislike::all();
    $countTimeRead = round(strlen($post->body) / 1500);
    $post_view = views($post)->unique()->count();
    return view('posts.show', compact(['comments', 'post', 'post_view', 'users', 'countTimeRead']));
}

public function getComments(Request $request)
{
    $post_id = $request->input('id');
    $post = Models\Post::find($post_id);
    $users = App\Models\User::all();
    $comments = App\Comments::where('id_posts', '=', $post_id)->get();

    return view('posts.commentsList', compact(['comments', 'users', 'post_id']));
}

public function makeComment(Request $request)
{
    if ($request->ajax()) {
        $user = Auth()->user();
        $comment = new Comments;
        $comment->author_id = 2;
        $comment->user_id = $user->id;
        $comment->id_posts = $request->postid;
        $comment->message = $request->commenttext;
        $comment->email_user = $user->email;
        $comment->name_user = $user->name;
        $comment->save();

        return response($comment);
    }
}
}
