<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class logsOfYear extends Authenticatable
{
	protected $table = 'logsOfYear';
    protected $fillable = [
        'idOfBook','h-M-Readed',
        'created_at', 'updated_at'
    ];
}
