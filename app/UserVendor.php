<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use HttpOz\Roles\Traits\HasRole;
use HttpOz\Roles\Contracts\HasRole as HasRoleContract;

class UserVendor extends Authenticatable implements HasRoleContract
{
    use Notifiable, HasRole;
    //
    protected $table = 'invento_user_vendor';
    protected $fillable=[
        'name',
        'email',
        'password',
        'address',
        'phone',
		'phone_other',
		'verification_code',
		'verification_status',

    ];

    protected $hidden=['password','remember_token'];
}
