<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Likes extends Authenticatable
{
	protected $table = 'Likes';
    protected $fillable = [
        'idOfBook','idOfLike',
        'created_at', 'updated_at'
    ];
}
