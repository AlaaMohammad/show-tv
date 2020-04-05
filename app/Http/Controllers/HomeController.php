<?php

namespace App\Http\Controllers;

use App\Episode;
use App\Series;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

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
        if(auth()->user()->role->role == 'admin'){
            return view('admin-panel.home');
        }
        $latest_episodes = Episode::latest('id')->take(10)->get();
        return view('user.home',compact('latest_episodes'));
    }

    /**
     * search results
     *
     * @param Request $request
     * @return Factory|View
     */
    public function search(Request $request)
    {
        $q = $_GET['q'];
        $series = Series::where('title', 'LIKE', '%' . $q . '%')->get();
        $episodes = Episode::where('title', 'LIKE', '%' . $q . '%')->get();
        return view('user.search-results', compact('series', 'episodes'));

    }

    /**
     * generate random series
     * @return Factory|View
     */
    public function random_series()
    {
        $random_series = Series::all()->random(5);
       // dd($random_series);
        return view('user.random-series', compact('random_series'));
    }
}

