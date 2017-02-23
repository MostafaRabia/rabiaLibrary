<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class logsOfMonth extends Authenticatable
{
	protected $table = 'logsOfMonth';
    protected $fillable = [
        'idOfBook','h-M-Readed',
        'created_at', 'updated_at'
    ];
}
