<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $guarded = [];

    public function tv_show(){
        return $this->belongsTo('App\TvShow', 'tv_shows_id', 'id');
    }
    public function episodes(){
        return $this->hasMany('App\Episode', 'seasons_id', 'id');
    }
}
