<?php

namespace App\Http\Controllers;

use App\Episode;
use App\Series;
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
        return view('home');
    }

    /**
     * search result
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search(Request $request)
    {
        $q = $_GET['q'];
        $series = Series::where('title', 'LIKE', '%' . $q . '%')->get();
        $episodes = Episode::where('title', 'LIKE', '%' . $q . '%')->get();
        return view('user.search-results', compact('series', 'episodes'));

    }

    public function random_series(){
        $random_series = Series::all()->random(5);
        return view('user.random-series',compact('random_series'));
    }
}
