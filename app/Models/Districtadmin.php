<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Districtadmin extends Model
{
    //Table Name
    protected $table = 'districtsadmins';

    //Primary Key
    protected $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function LGoffice(){
        return $this->hasMany('App\Models\LGoffice');
    }

    public function house(){
        return $this->hasMany('App\Models\House');
    }
}
