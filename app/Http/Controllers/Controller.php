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
    public function season_ticket(){
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
        return view('profile.season_ticket',compact('outComments'));
    }
    public function order_story(){
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
        return view('profile.order_story',compact('outComments'));
    }
    public function my_comments(){
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
        return view('profile.my_comments', compact('outComments'));
    }
    public function index_buy_ticket(){
        return view('buy_ticket');
    }
    public function status(){

        return 'active';
    }

}
