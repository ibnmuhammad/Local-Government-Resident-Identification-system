<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    //Table Name
    protected $table = 'residents';

    //Primary Key
    protected $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;

    public function house(){
        return $this->belongsTo('App\Models\House', 'HouseID');
    }

    public function lgoffice(){
        return $this->belongsTo('App\Models\LGoffice', 'LocalGovtID');
    }

    public function tencellleaders(){
        return $this->belongsTo('App\Models\TenCellLeader', 'baloziID');
    }
}
