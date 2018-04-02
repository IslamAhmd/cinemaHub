<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = [];

    public function children(){
        return $this->hasMany('App\Menu', 'parent_id', 'id')->orderBy('order');
    }
}
