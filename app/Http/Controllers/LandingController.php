<?php

namespace App\Http\Controllers;

use App\Genre;
use App\SliderImage;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        $slider_images = SliderImage::all();
        $genres = Genre::all();
        return view('web.index', compact('slider_images', 'genres'));
    }
}
