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
        $comments = Comments::where('email_user', '=', Auth()->user()->email)->get();

        return view('profile.index', compact('comments'));
    }

    public function saveChanges(UserRequest $userRequest)
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
    public function saveAvatar(ImageRequest $ImageRequest)
    {
        $id = Auth()->user()->id;
        $user = User::find($id);
        if ($ImageRequest->hasFile('avatar')) {
            $file = $ImageRequest->file('avatar');
            $imageName = time() . '.' . $ImageRequest->file('avatar')->getClientOriginalExtension();
            $file->storeAs('images/users/' , $imageName, 'public');
            $user->avatar = 'images/users/'.$imageName;
        }
        $user->save();

        return redirect()->route('profile')->with('success', 'Изменения сохранены');
    }
}
