<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Menu extends Model
{
    public function restaurant() {
        return $this->belongsTo(Restaurant::class);
    }

    public function getAllSukiMenu() {
        $menus = DB::table('menus')->where('restaurant_id','=','1')->get();
        return $menus;
    }
}
