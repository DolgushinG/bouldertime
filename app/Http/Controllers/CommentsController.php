<?php

namespace App\Http\Controllers;
use App\Http\Requests\CommentsRequest;
use Illuminate\Http\Request;
use App\Models;
class CommentsController extends Controller
{
    public function index_comments()
    {
        $comments = Models\Comments::all();
//        $comments_for_post = [];
//        foreach ($comments as $comment){
//            if ($id === $comment->id_posts) {
//                $comments_for_post [] =+ $comment;
//            }
//        }
        return view('posts.show', compact('comments'));
    }

    public function send($id, CommentsRequest $request)
    {
        $comments = new Models\Comments();

        $comments->email = $request->old('email');
        $comments->message = $request->old('message');
        $comments->name = $request->old('name');
        $comments->id_posts = $id;
        $comments->author_id = 3;

        $comments->save();
        return redirect('posts', $id)->with('success','Ваш комментарий будет опубликован');
    }
}
