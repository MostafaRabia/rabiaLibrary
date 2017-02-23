<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
	protected $table = 'Admin';
    protected $fillable = [
        'Name', 'Password', 'Email',
        'imageOfAdmin', 'Permissions',
        'created_at', 'updated_at'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
