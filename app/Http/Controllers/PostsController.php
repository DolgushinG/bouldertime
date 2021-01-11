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

        $comments->email = $request->input('email');
        $comments->id_posts = intval($id);
        $comments->author_id = 2;
        $comments->message = $request->input('message');
        $comments->name = $request->input('name');
        $comments->save();

        return redirect()->route('show', $id)->with('success', 'Комментарий успешно добавлен');
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

        return view('posts.show', compact('post','outComments'));
    }

}
