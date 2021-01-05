<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index_home(){
        return view('home');
    }
    public function index_about(){
        return view('about');
    }

    public function index_buy_ticket(){
        return view('buy_ticket');
    }
    public function status(){

        return 'active';
    }

}
