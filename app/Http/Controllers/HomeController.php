<?php

namespace App\Http\Controllers;

use App\Comments;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $comments = Comments::all();
        $comments_for_posts = compact('comments');
        $outComments = [];
        foreach ($comments_for_posts as $comments_for_post) {
            foreach ($comments_for_post as $item) {
                if($item->email_user === Auth()->user()->email){
                    $outComments[] = $item;
                }

            }
        }
        return view('profile.index', compact('outComments'));
    }
}
