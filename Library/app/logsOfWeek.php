<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class logsOfWeek extends Authenticatable
{
	protected $table = 'logsOfWeek';
    protected $fillable = [
        'idOfBook','h-M-Readed',
        'created_at', 'updated_at'
    ];
}
