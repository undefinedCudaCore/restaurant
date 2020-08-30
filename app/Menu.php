<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function menuRestaurant()
    {
        return $this->belongsTo('App\Menu', 'menu_id', 'id');
    }
    public function menuRestaurant2()
    {
        return $this->hasMany('App\Restaurant', 'menu_id', 'id');
    }
}
