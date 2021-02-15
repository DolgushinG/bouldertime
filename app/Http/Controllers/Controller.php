<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Comments;
use App\Models;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function indexHome(){
        $newPost = Models\Post::latest('created_at')->where('status', '=', 'PUBLISHED')->first();
        $posts = Models\post::where('status', '=', 'PUBLISHED')->paginate(6);
        return view('home', compact('posts', 'newPost'));
    }
    public function indexAbout(){
        return view('about');
    }
    public function indexTest(){
        return view('test');
    }
    public function indexPrivacy(){
        return view('privacy.privatedata');
    }
    public function indexPolities(){
        return view('privacy.policiesconf');
    }
    public function seasonTicket(){
        $comments = Comments::where('email_user', '=', Auth()->user()->email)->get();
        return view('profile.season_ticket',compact('comments'));
    }
    public function orderStory(){
        $comments = Comments::where('email_user', '=', Auth()->user()->email)->get();
        return view('profile.orderStory',compact('comments'));
    }
    public function myComments(){
        $comments = Comments::where('email_user', '=', Auth()->user()->email)->paginate(6);
        return view('profile.myComments', compact('comments'));
    }
    public function indexBuyTicket(){
        return view('buy_ticket');
    }


}
