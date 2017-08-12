<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    //

    protected $table = 'invento_suppliers';
    protected $fillable=[
        'created_at',
        'updated_at',
        'deleted_at',
        'address',
        'phone',
        'phone_other',
        'name',
        'id'
    ];

    public function products()
    {
       return $this->hasMany('App\Products');
    }
}
