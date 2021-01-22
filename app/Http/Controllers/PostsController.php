<?php

namespace App\Http\Controllers;

use App\Models;
use App\Models\LikeDislike;
use App;
use App\Http\Requests\CommentsRequest;
use http\Env\Request;
use App\Http\Requests\postRequest;

class PostsController extends Controller
{
    public function index()
    {
        $newPost = App\Models\Post::latest('created_at')->first();
        $posts = Models\post::paginate(6);
        return view('posts.index', compact('posts','newPost'));
    }

    function save_likedislike(postRequest $request)
    {

        $data = new LikeDislike;
        $data->post_id = $request->post;
        if ($request->type == 'like') {
            $data->like = 1;
        } else {
            $data->dislike = 1;
        }
        $data->save();
        return response()->json([
            'bool' => true
        ]);
    }

    public function send_comments($id, CommentsRequest $request)
    {
        $comments = new App\Comments();
        $comments->id_posts = intval($id);
        $comments->author_id = 2;
        $comments->message = $request->input('message');
        $comments->name_user = Auth()->user()->name;
        $comments->id_user = Auth()->user()->id;
        $comments->email_user = Auth()->user()->email;

        $comments->save();

        return redirect()->route('show', $id)->with('success', 'Комментарий успешно добавлен');
    }

    public function send_edit_comment($id_post, $id_comment, CommentsRequest $request)
    {
        $comment = App\Comments::find($id_comment);
        $comment->id_posts = intval($id_post);
        $comment->author_id = 2;
        $comment->message = $request->input('message');
        $comment->name_user = Auth()->user()->name;
        $comment->id_user = Auth()->user()->id;
        $comment->email_user = Auth()->user()->email;

        $comment->save();

        return redirect()->route('show', $id_post)->with('success', 'Изменения сохранены');
    }

    public function edit_comments($id_post, $id_comment)
    {
        $comment = App\Comments::find($id_comment);
        $post = Models\Post::find($id_post);
        return view('posts.edit_comments', compact('comment', 'post'));
    }

    public function show($id)
    {
        $post = Models\Post::find($id);
        views($post)->record();
        $likes = LikeDislike::all();
        $likeInPost = 0;
        $dislikeInPost = 0;

        foreach ($likes as $like){
            if($like->post_id === intval($id)){
                $likeInPost += $like->like;
                $dislikeInPost += $like->dislike;
            }
        }

        $comments = App\Comments::where('id_posts','=',$id)->get();
        $countTimeRead = round(strlen($post->body) / 1500);
        $users = App\Models\User::all();
        $post_view = views($post)->count();
        return view('posts.show', compact(['comments', 'post', 'post_view', 'users', 'countTimeRead','likeInPost','dislikeInPost']));
    }

}
