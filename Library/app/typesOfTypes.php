<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class typesOfTypes extends Authenticatable
{
	protected $table = 'typesOfTypes';
    protected $fillable = [
        'idOfType', 'idOfParentType',
        'Type', 'created_at',
        'updated_at'
    ];
}
