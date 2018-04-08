<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TvShow extends Model
{
    protected $guarded = [];
    public function genres(){
        return $this->belongsToMany('App\Genre', 'item_genres', 'item_id', 'genre_id')->where(['item_genres.table_name' => 'tv_shows']);
    }
    public function seasons(){
        return $this->hasMany('App\Season', 'tv_shows_id', 'id');
    }
    public function episodes(){
        return $this->hasMany('App\Episode', 'tv_shows_id', 'id');
    }
}
