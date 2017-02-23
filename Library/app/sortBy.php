<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class sortBy extends Authenticatable
{
	protected $table = 'sortsBy';
    protected $fillable = [
        'sortByEnglish','sortByArabic',
        'sortByRoutes','Sql'
    ];
}
