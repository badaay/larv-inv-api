<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserVendor extends Model
{
    //
    protected $fillable=[
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
        'email',
        'remember_token',
        'address',
        'phone',
        'phone_other',
        'id'
    ];

    protected $hidden=['password'];
}
