<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $guarded = [];
    public function movies(){
        return $this->belongsToMany('App\Movie', 'item_genres', 'genre_id', 'item_id');
    }
    public function tv_shows(){
        return $this->belongsToMany('App\TvShow', 'item_genres', 'genre_id', 'item_id');
    }

}
