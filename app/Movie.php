<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = [];
    public function genres(){
        return $this->belongsToMany('App\Genre', 'item_genres', 'item_id', 'genre_id')->where(['item_genres.table_name' => 'movies']);
    }
}
