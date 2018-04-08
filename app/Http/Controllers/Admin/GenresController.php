<?php

namespace App\Http\Controllers\Admin;

use App\Genre;
use App\Http\Requests\Genres\CreateGenreRequest;
use App\Http\Requests\Genres\UpdateGenreRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class GenresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genres = Genre::all();
        return view('admin.genres.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.genres.add-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGenreRequest $request)
    {
        $request = $this->saveFiles($request);
        Genre::create($request->only(['name', 'image']));
        Session::flash('success', 'Added Successfully');
        return redirect(route('genres.index'));
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
        $genre = Genre::findOrFail($id);
        return view('admin.genres.add-edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGenreRequest $request, $id)
    {
        $request = $this->saveFiles($request);
        $genre = Genre::findOrFail($id);
        $genre->update($request->only(['name', 'image']));
        Session::flash('success', 'Edited Successfully');
        return redirect(route('genres.index'));
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
                Genre::destroy($request->ids);
        }
        else
            Genre::destroy($id);
        Session::flash('success', 'Deleted Successfully');
        return redirect(route('genres.index'));
    }
}
