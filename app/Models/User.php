<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;
    // use LaratrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // //Table Name
    // protected $table = 'users';

    // //Primary Key
    // protected $primaryKey = 'id';

    // //Timestamps
    // public $timestamps = true;
    
    /*
        get Local Government details associated with the user. relationship between user and local government
    */
    public function lgoffice(){
        return $this->hasOne('App\Models\LGoffice');
    }

    public function district(){
        return $this->hasOne('App\MOdels\District');
    }
}
