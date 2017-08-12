<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class products extends Model
{
    use SoftDeletes;
    //
    protected $table = 'invento_products';
    protected $fillable=[
        'name', 
        'description', 
        'weight', 
        'buy_price',
        'sell_price', 
        'stock',
        'created_at',
        'updated_at',
        'deleted_at',
        'name',
        'id'
    ];
    public function productsStock()
    {
       return $this->hasMany('App\ProductsStock');
    }
    public function categories()
    {
        return $this->belongsTo('App\Categories');
    }
    public function suppliers()
    {
        return $this->belongsTo('App\Suppliers');
    }
}
