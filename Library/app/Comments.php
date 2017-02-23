<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Comments extends Authenticatable
{
	protected $table = 'Comments';
    protected $fillable = [
        'idOfBook', 'idOfUser',
        'Comment', 'created_at', 
        'updated_at'
    ];
}
