<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Readed extends Authenticatable
{
	protected $table = 'Readed';
    protected $fillable = [
        'idOfBook', 'idOfUser', 'Readed',
        'created_at', 'updated_at'
    ];
    public function Books(){
        return $this->belongsTo('App\Books','idOfBook');
    }
}
