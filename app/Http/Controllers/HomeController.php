<?php

namespace App\Http\Controllers;

use App\Comments;
use App\Models\City;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\ImageRequest;


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
                if ($item->email_user === Auth()->user()->email) {
                    $outComments[] = $item;
                }

            }
        }
        return view('profile.index', compact(['outComments']));
    }

    public function save_changes(UserRequest $userRequest)
    {
        $id = Auth()->user()->id;
        $user = User::find($id);
        $user->email = $userRequest->input('email');
        $user->name = $userRequest->input('name');
        $user->telephone = $userRequest->input('telephone');
        $user->city = $userRequest->get('city');
        $user->save();

        return redirect()->route('profile')->with('success', 'Изменения сохранены');
    }
    public function save_avatar(ImageRequest $ImageRequest)
    {
        $id = Auth()->user()->id;
        $user = User::find($id);
        if ($ImageRequest->hasFile('avatar')) {
            $file = $ImageRequest->file('avatar');
            $imageName = time() . '.' . $ImageRequest->file('avatar')->getClientOriginalExtension();
            $file->move('images/users' , $imageName);
            $user->avatar = 'images/users/'.$imageName;
        }
        $user->save();

        return redirect()->route('profile')->with('success', 'Изменения сохранены');
    }
}
