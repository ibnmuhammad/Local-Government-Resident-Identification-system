<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wilaya extends Model
{
    //
    public function Region(){
        return $this->belongsTo('App\Models\Region');
    }
}
