<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;
use App\Models;
use App\Models\LikeDislike;
use App\Models\Replies;
use App;
use App\Http\Requests\CommentsRequest;
use App\Http\Requests\postRequest;

class PostsController extends Controller
{
    public function index()
    {
        $newPost = App\Models\Post::latest('created_at')->first();
        $posts = Models\post::paginate(6);
        return view('posts.index', compact('posts', 'newPost'));
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

    public function send_edit_comment($id_post, $id_comment, CommentsRequest $request)
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

    public function edit_comments($id_post, $id_comment)
    {
        $comment = App\Comments::find($id_comment);
        $post = Models\Post::find($id_post);
        return view('posts.edit_comments', compact('comment', 'post'));
    }

    public function delete_comment(Request $request)
    {
        if ($request->ajax()) {
            $comment = new Comments;
            $id_comment = $request->input('comment');
            App\Comments::find($id_comment)->delete();
            return response($comment);
        }
    }

    public function show($id, Request $request)
    {
        $post = Models\Post::find($id);
        $users = App\Models\User::all();
        $comments = App\Comments::where('id_posts', '=', $id)->get();
        views($post)->record();
        $likes = LikeDislike::all();

        $countTimeRead = round(strlen($post->body) / 1500);

        $post_view = views($post)->count();
        return view('posts.show', compact(['comments', 'post', 'post_view', 'users', 'countTimeRead']));
    }

    public function getComments(Request $request)
    {
        $post_id = $request->input('id');
        $post = Models\Post::find($post_id);
        $users = App\Models\User::all();
        $comments = App\Comments::where('id_posts', '=', $post_id)->get();
        $comment_id = $request->id_comment;
        $replies = Replies::where('id_comment', '=', $comment_id)->get();
        $comments = App\Comments::where('id_posts', '=', $post_id)->get();
        return view('posts.commentslist', compact(['comments', 'users', 'post_id', 'replies']));
    }
    public function getreplies(Request $request)
    {

        $users = App\Models\User::all();
        $repliesAll = Replies::all();
        $comments = App\Comments::where('id_posts', '=', $request->input('id'))->get();
        $replies = [];
        foreach($comments as $comment){
            foreach ($repliesAll as $repl){
                if ($comment->id ===$repl->id_comment) {
                    $replies[] = $repl;
                }
            }
        }
        
        return view('posts.replies', compact(['replies','users']));
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

    public function makeRepl(Request $request)
    {

        if ($request->ajax()) {
            $user = Auth()->user();
            $comment = new Replies;
            $comment->author_id = 2;
            $comment->user_id = $user->id;
            $comment->id_comment = $request->comment_id;
            $comment->repl = $request->relptext;
            $comment->email_user = $user->email;
            $comment->name_user = $user->name;
            $comment->save();
            return response($comment);
        }
    }
}
