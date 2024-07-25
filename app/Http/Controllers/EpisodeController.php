<?php

namespace App\Http\Controllers;

use App\Episode;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
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
        $episodes = Episode::all();
        return view('admin-panel.episodes.index',compact('episodes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //view the create page for a new episode
        return view('admin-panel.episodes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store a new episode for a series
        Episode::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'airing_time_day' => $request->input('airing_time_day'),
            'airing_time_hour'=> $request->input('airing_time_hour'),
            'thumbnail' =>$request->input('thumbnail'),
            //'video_asset' => $request
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //show  a specific episodes
        $episode = Episode::findOrFail($id);
        return view('admin-panel.episodes.show',compact($episode));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $episode = Episode::findOrFail($id);
        return view('admin-panel.episodes.edit',compact('episode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
