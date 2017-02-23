<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Types;
use App\typesOfTypes;
use App\sortBy;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /* Start Array App Singleton */
        $pathsArray = [
            'css'=>url('public/styles/css'),
            'js'=>url('public/styles/js'),
            'image'=>url('public/images'),
            'books'=>url('public/books'),
            'normal'=>'normal',
            'admin'=>'admin'
        ];
        foreach ($pathsArray as $Name => $Path) {
            app()->singleton($Name,function() use ($Path){
                return $Path;
            });
        }
        /* End Array App Singleton */
        /* Start Types App Singleton */
        $getAllTypes = Types::all();
        app()->singleton('types',function() use ($getAllTypes){
            return $getAllTypes;
        });
        /* End Types App Singleton */
        /* Start TypesOfTypes App Singleton */
        $getAllTypesOfTypes = typesOfTypes::all();
        app()->singleton('typesOfTypes',function() use ($getAllTypesOfTypes){
            return $getAllTypesOfTypes;
        });
        /* End TypesOfTypes App Singleton */
        /* Start SortsBy App Singleton */
        $getAllSortsBy = sortBy::all();
        app()->singleton('sortsBy',function() use ($getAllSortsBy){
            return $getAllSortsBy;
        });
        /* End SortsBy App Singleton */
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
