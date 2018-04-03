<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TvShow extends Model
{
    protected $guarded = [];
    public function genres(){
        return $this->belongsToMany('App\Genre', 'item_genres', 'item_id', 'genre_id');
    }
}
