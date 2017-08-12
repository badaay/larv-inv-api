<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsStock extends Model
{
    //
    protected $fillable=[
        'created_at',
        'updated_at',
        'invento_products_id',
        'invento_user_vendor',
        'stock_in',
        'stock_out',
        'decription',
        'id'
    ];

    public function products()
    {
       return $this->belongsTo('App\Products');
    }
}
