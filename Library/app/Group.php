<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Group extends Authenticatable
{
	protected $table = 'Group';
    protected $fillable = [
        'Name', 'Password', 'Email',
        'imageOfUser', 'Permissions',
        'created_at', 'updated_at'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
