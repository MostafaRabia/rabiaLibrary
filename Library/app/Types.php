<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Types extends Authenticatable
{
	protected $table = 'Types';
    protected $fillable = [
        'idOfType', 'Type',
        'created_at', 'updated_at'
    ];
    public function typesOfTypes(){
    	return $this->hasMany('App\typesOfTypes','idOfParentType');
    }
}
