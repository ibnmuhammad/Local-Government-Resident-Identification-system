<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenCellLeader extends Model
{
    //Table Name
    protected $table = 'tencellleaders';

    //Primary Key
    protected $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;

    public function lgoffice(){
        return $this->belongsTo('App\Models\LGoffice');
    }

    public function house(){
        return $this->hasMany('App\Models\House');
    }

    public function resident(){
        return $this->hasMany('App\Models\Resident');
    }
}
