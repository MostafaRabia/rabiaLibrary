<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Books extends Authenticatable
{
	protected $table = 'Books';
    protected $fillable = [
        'Name', 'nameOfAuthor', 'Type', 'typeOfTypes',
        'informationAboutBook', 'pathOfBook', 'readBook',
        'imageOfBook', 'uploadedBy',
        'created_at', 'updated_at'
    ];
    public function Authors(){
    	return $this->belongsTo('App\Authors','nameOfAuthor');
    }
    public function Types(){
    	return $this->belongsTo('App\Types','Type');
    }
    public function Readed(){
        return $this->hasMany('App\Readed','Readed');
    }
}
