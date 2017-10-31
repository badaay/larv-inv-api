<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documentation extends Model
{
    //
    protected $table = 'documentations';
    //
    protected $fillable=[
        'created_at',
        'updated_at',
        'title',
        'id',
        'url',
        'method',
        'url_param',
        'data_param',
        'sample_call'
    ];
}
