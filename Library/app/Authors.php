<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Authors extends Authenticatable
{
	protected $table = 'Authors';
    protected $fillable = [
        'Name', 'Facebook', 'Twitter',
        'Google', 'Email',
        'imageOfAuthor', 'aboutHim',
        'created_at', 'updated_at'
    ];
}
