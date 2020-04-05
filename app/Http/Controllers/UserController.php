<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // list all episodes foe all series
        $users = User::all();
        return view('admin-panel.users.index', compact('users'));

    }

    /**
     * like episode
     *
     * @param $episode_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function like($episode_id){
        $user= Auth::user();
        $user->like_episode()->attach($episode_id);

        return redirect()->back();
    }

    /**
     * dislike episode
     *
     * @param $episode_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function dislike($episode_id){
        $user= Auth::user();
        $user->like_episode()->detach($episode_id);

        return redirect()->back();
    }

    /**
     * follow series
     *
     * @param $series_id
     * @return \Illuminate\Http\RedirectResponse
     */

    public function follow($series_id){
        $user= Auth::user();
        $user->follow_series()->attach($series_id);

        return redirect()->back();
    }

    /**
     * unfollow series
     * @param $series_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function unfollow($series_id){
        $user= Auth::user();
        $user->follow_series()->detach($series_id);

        return redirect()->back();
    }
}
