<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LGoffice extends Model
{
    //Table Name
    protected $table = 'lgdetails';

    //Primary Key
    protected $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function Districtadmin(){
        return $this->belongsTo('App\Models\Districtadmin', 'ManagedBy');
    }

    public function tencellleaders(){
        return $this->hasMany('App\Models\TenCellLeader');
    }

    public function house(){
        return $this->hasMany('App\Models\House');
    }

    public function resident(){
        return $this->hasMany('App\Models\Resident');
    }
}
