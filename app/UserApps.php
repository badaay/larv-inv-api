<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserApps extends Model
{
    //
    use SoftDeletes;

    protected $table = 'invento_user_apps';
    
    protected $dates = ['delete_at'];
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
