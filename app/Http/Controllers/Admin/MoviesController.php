<?php

namespace App\Http\Controllers\Admin;

use App\Genre;
use App\Http\Requests\Movie\UpdateMovieRequest;
use App\Http\Requests\Movies\CreateMovieRequest;
use App\ItemGenre;
use App\Movie;
use App\Network;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::with('genres')->get();
        return view('admin.movies.index', compact('movies'));
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
        return view('admin.movies.add-edit', compact('genres', 'networks'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMovieRequest $request)
    {
        $request = $this->saveFiles($request);
        $movie = Movie::create($request->except(['_token', 'genres']));
        foreach($request->genres as $genre) {
            ItemGenre::create(['item_id'=>$movie->id, 'genre_id'=>$genre, 'table_name'=>'movies']);
        }
        Session::flash('success', 'Added Successfully');
        return redirect(route('movies.index'));
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
        $movie = Movie::findOrFail($id);
        $genres = Genre::all();
        $networks = Network::all();
        return view('admin.movies.add-edit', compact('genres', 'networks', 'movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMovieRequest $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $request = $this->saveFiles($request);
        $movie->update($request->except(['_token', 'genres']));
        ItemGenre::where(['item_id'=>$movie->id])->where(['table_name'=>'movies'])->delete();
        foreach($request->genres as $genre) {
            ItemGenre::create(['item_id'=>$movie->id, 'genre_id'=>$genre, 'table_name'=>'movies']);
        }
        Session::flash('success', 'Edited Successfully');
        return redirect(route('movies.index'));
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
                Movie::destroy($request->ids);
        }
        else
            Movie::destroy($id);
        Session::flash('success', 'Deleted Successfully');
        return redirect(route('movies.index'));
    }
}
