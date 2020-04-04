<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSeries;
use App\Series;

class SeriesController extends Controller
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
        $series = Series::all();
        return view('admin-panel.series.index', compact('series'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //view the create page for a new episode
        return view('admin-panel.series.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSeries $request)
    {
        //store a new episode for a series
        Series::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'airing_time_from' => $request->input('airing-time-from'),
            'airing_time_to' => $request->input('airing-time-to'),
            'airing_time_hour' => $request->input('airing-time-hour'),
        ]);
        return redirect()->route('series.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //show  a specific series
        $series = Series::findOrFail($id);
        return view('series.show', compact($series));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $series = Series::findOrFail($id);
        return view('admin-panel.series.edit', compact('series'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSeries $request, $id)
    {
        //
        $series = Series::findOrFail($id);
        $series->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'airing_time_from' => $request->input('airing-time-from'),
            'airing_time_to' => $request->input('airing-time-to'),
            'airing_time_hour' => $request->input('airing-time-hour'),
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Series::destroy($id);
        return redirect()->back();
    }

    /**
     * view the series with episodes
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view($id)
    {

        $series = Series::findOrFail($id);
        return view('user.series.view', compact('series'));

    }
}
