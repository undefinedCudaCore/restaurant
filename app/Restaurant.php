<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function restaurantMenus()
    {
        return $this->hasMany('App\Restaurant', 'menu_id', 'id');
    }
    public function restaurantMenus2()
    {
        return $this->belongsTo('App\Restaurant', 'menu_id', 'id');
    }
}
