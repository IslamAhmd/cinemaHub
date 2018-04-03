<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SliderImages\CreateSliderimageRequest;
use App\Http\Requests\SliderImages\UpdateSliderimageRequest;
use App\SliderImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class SliderImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider_images = SliderImage::all();
        return view('admin.slider_images.index', compact('slider_images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider_images.add-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSliderimageRequest $request)
    {
        $request = $this->saveFiles($request);
        SliderImage::create($request->only(['caption', 'link', 'description', 'image']));
        Session::flash('success', 'Added Successfully');
        return redirect(route('slider_images.index'));
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
        $slider_image = SliderImage::findOrFail($id);
        return view('admin.slider_images.add-edit', compact('slider_image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSliderimageRequest $request, $id)
    {
        $slider_image = SliderImage::findOrFail($id);
        $request = $this->saveFiles($request);
        $slider_image->update($request->only(['caption', 'link', 'description', 'image']));
        Session::flash('success', 'Edited Successfully');
        return redirect(route('slider_images.index'));
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
                SliderImage::destroy($request->ids);
        }
        else
            SliderImage::destroy($id);
        Session::flash('success', 'Deleted Successfully');
        return redirect(route('slider_images.index'));
    }
}
