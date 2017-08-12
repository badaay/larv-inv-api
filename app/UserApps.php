<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserApps extends Model
{
    //
    protected $fillable=[
        'name', 
        'description', 
        'tipe', 
        'app_key',
        'created_at',
        'updated_at',
        'deleted_at',
        'name',
        'id'
    ];
    
}
