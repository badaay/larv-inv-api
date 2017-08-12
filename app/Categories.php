<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    // use SoftDeletes;
    //
    protected $table = 'invento_categories';
    protected $fillable=[
        'created_at',
        'updated_at',
        'name',
        'id'
    ];

    public function products()
    {
       return $this->hasMany('App\Products');
    }
}
