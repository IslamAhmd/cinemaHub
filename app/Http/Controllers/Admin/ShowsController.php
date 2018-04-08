<?php

namespace App\Http\Controllers\Admin;

use App\Genre;
use App\Http\Requests\Shows\CreateShowRequest;
use App\Http\Requests\Shows\UpdateShowRequest;
use App\ItemGenre;
use App\Network;
use App\TvShow;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ShowsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tv_shows = TvShow::with('genres')->get();
        return view('admin.tv_shows.index', compact('tv_shows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        $networks = Network::all();
        return view('admin.tv_shows.add-edit', compact('genres', 'networks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateShowRequest $request)
    {
        $request = $this->saveFiles($request);
        $tv_show = TvShow::create($request->except(['_token', 'genres']));
        foreach($request->genres as $genre) {
            ItemGenre::create(['item_id'=>$tv_show->id, 'genre_id'=>$genre, 'table_name'=>'tv_shows']);
        }
        Session::flash('success', 'Added Successfully');
        return redirect(route('shows.index'));
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
        $tv_show = TvShow::findOrFail($id);
        $genres = Genre::all();
        $networks = Network::all();
        return view('admin.tv_shows.add-edit', compact('genres', 'networks', 'tv_show'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShowRequest $request, $id)
    {
        $tv_show = TvShow::findOrFail($id);
        $request = $this->saveFiles($request);
        $tv_show->update($request->except(['_token', 'genres']));
        ItemGenre::where(['item_id'=>$tv_show->id])->where(['table_name'=>'tv_shows'])->delete();
        foreach($request->genres as $genre) {
            ItemGenre::create(['item_id'=>$tv_show->id, 'genre_id'=>$genre, 'table_name'=>'tv_shows']);
        }
        Session::flash('success', 'Edited Successfully');
        return redirect(route('shows.index'));
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
