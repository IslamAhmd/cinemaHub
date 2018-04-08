<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $guarded = [];

    public function tv_show(){
        return $this->belongsTo('App\TvShow', 'tv_shows_id', 'id');
    }
    public function season(){
        return $this->belongsTo('App\Season', 'seasons_id', 'id');
    }
}
