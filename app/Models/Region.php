<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //
    public function Wilaya(){
        return $this->hasMany('App\Models\Wilaya');
    }
}
