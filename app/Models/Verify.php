<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Verify extends Model
{
    //connection
    protected $connection = 'mysql2';

    //table name
    protected $table = 'resident_details';

    //primary key
    protected $primaryKey = 'id';
    
}
