<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use HttpOz\Roles\Traits\HasRole;
use HttpOz\Roles\Contracts\HasRole as HasRoleContract;

class UserKey extends Authenticatable implements HasRoleContract
{
    use Notifiable, HasRole;
    //

    protected $table = "user_key";

    protected $fillable = [
    		'id_user_vendor', 'server_key', 'project_key', 'create_at', 'update_at'

    ];
}
