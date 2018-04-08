<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Seasons\CreateSeasonRequest;
use App\Http\Requests\Seasons\UpdateSeasonRequest;
use App\Season;
use App\TvShow;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class SeasonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seasons = Season::with('tv_show')->get();
        return view('admin.seasons.index', compact('seasons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tv_shows = TvShow::all();
        return view('admin.seasons.add-edit', compact('tv_shows'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSeasonRequest $request)
    {
        $request = $this->saveFiles($request);
        Season::create($request->except(['_token']));
        Session::flash('success', 'Added Successfully');
        return redirect(route('seasons.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $season = Season::findOrFail($id);
        $tv_shows = TvShow::all();
        return view('admin.seasons.add-edit', compact('tv_shows', 'season'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSeasonRequest $request, $id)
    {
        $season = Season::findOrFail($id);
        $request = $this->saveFiles($request);
        $season->update($request->except(['_token']));
        Session::flash('success', 'Edited Successfully');
        return redirect(route('seasons.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        if($id == 'mass'){
            if ($request->filled('ids'))
                Season::destroy($request->ids);
        }
        else
            Season::destroy($id);
        Session::flash('success', 'Deleted Successfully');
        return redirect(route('seasons.index'));
    }
}
