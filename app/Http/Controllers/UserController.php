<?php

namespace App\Http\Controllers;

use App\User;

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
}
