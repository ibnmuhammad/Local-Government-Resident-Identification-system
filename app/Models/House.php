<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    //Table Name
    protected $table = 'houses';

    //Primary Key
    protected $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;

    public function lgoffice(){
        return $this->belongsTo('App\Models\LGoffice', 'LocalGovtID');
    }

    public function tencellleaders(){
        return $this->belongsTo('App\Models\TenCellLeader', 'baloziID');
    }

    public function districtadmin(){
        return $this->belongsTo('App\Models\Districtadmin', 'adminID');
    }

    public function resident(){
        return $this->hasMany('App\Models\Resident');
    }
}
