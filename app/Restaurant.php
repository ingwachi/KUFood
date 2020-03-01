<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Restaurant extends Model
{
    public function menus() {
        return $this->hasMany(Menu::class);
    }

    public function getFirstRestaurant() {
        $res = DB::table('restaurants')->where('id','=','1')->first();
        return $res;
    }
}
