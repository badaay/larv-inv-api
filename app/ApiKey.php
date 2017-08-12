<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApiKey extends Model
{
    //
     protected $fillable=[
        'created_at',
        'updated_at',
        'secretkey',
        'hit',
        'status',
        'id'
    ];
}
