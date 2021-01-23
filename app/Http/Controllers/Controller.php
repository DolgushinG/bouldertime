<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Comments;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index_home(){
        return view('home');
    }
    public function index_about(){
        return view('about');
    }
    public function index_test(){
        return view('test');
    }
    public function season_ticket(){
        $comments = Comments::where('email_user', '=', Auth()->user()->email)->get();
        return view('profile.season_ticket',compact('comments'));
    }
    public function order_story(){
        $comments = Comments::where('email_user', '=', Auth()->user()->email)->get();
        return view('profile.order_story',compact('comments'));
    }
    public function my_comments(){
        $comments = Comments::where('email_user', '=', Auth()->user()->email)->get();
        return view('profile.my_comments', compact('comments'));
    }
    public function index_buy_ticket(){
        return view('buy_ticket');
    }


}
