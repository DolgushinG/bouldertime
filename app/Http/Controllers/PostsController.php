<?php

namespace App\Http\Controllers;
use App\Models;
use App;
use App\Http\Requests\CommentsRequest;


class PostsController extends Controller
{
    public function index(){
        $posts = Models\post::paginate(6);
        return view('posts.index', compact('posts'));
    }

    public function send_comments($id ,CommentsRequest $request){
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
    public function send_edit_comment($id_post ,$id_comment,CommentsRequest $request){
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
    public function edit_comments($id_post ,$id_comment){
        $comment = App\Comments::find($id_comment);
        $post = Models\post::find($id_post);
        return view('posts.edit_comments', compact('comment','post'));
    }
    public function show($id){

        $comments = App\Comments::all();
        $comments_for_posts = compact('comments');
        $outComments = [];
        foreach ($comments_for_posts as $comments_for_post) {
            foreach ($comments_for_post as $item) {
                if($item->id_posts === intval($id)){
                    $outComments[] = $item;
                }
            }
        }
        $post = Models\post::find($id);
        return view('posts.show', compact('outComments','post'));
    }

}
