<?php

namespace App\Http\Controllers\Admin;

use App\Episode;
use App\Http\Requests\Episodes\CreateEpisodeRequest;
use App\Http\Requests\Episodes\UpdateEpisodeRequest;
use App\Season;
use App\TvShow;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class EpisodesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $episodes = Episode::with('tv_show', 'season')->get();
        return view('admin.episodes.index', compact('episodes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tv_shows = TvShow::with('seasons')->get();
        return view('admin.episodes.add-edit', compact('tv_shows'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEpisodeRequest $request)
    {
        $request = $this->saveFiles($request);
        Episode::create($request->except(['_token']));
        Session::flash('success', 'Added Successfully');
        return redirect(route('episodes.index'));

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
        $episode = Episode::with('season', 'tv_show')->findOrFail($id);
        $seasons = Season::where(['tv_shows_id'=>$episode->tv_show->id])->get();
        $tv_shows = TvShow::with('seasons')->get();
        return view('admin.episodes.add-edit', compact('tv_shows', 'episode', 'seasons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEpisodeRequest $request, $id)
    {
        $episode = Episode::with('season', 'tv_show')->findOrFail($id);
        $request = $this->saveFiles($request);
        $episode->update($request->except(['_token']));
        Session::flash('success', 'Added Successfully');
        return redirect(route('episodes.index'));
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
                Episode::destroy($request->ids);
        }
        else
            Episode::destroy($id);
        Session::flash('success', 'Deleted Successfully');
        return redirect(route('episodes.index'));
    }
}
