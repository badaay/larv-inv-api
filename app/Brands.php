<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    protected $table = 'invento_brands';
    //
    protected $fillable=[
        'created_at',
        'updated_at',
        'name',
        'id'
    ];
}
