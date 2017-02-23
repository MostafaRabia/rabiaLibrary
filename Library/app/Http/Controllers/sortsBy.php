<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\sortBy;
use DB;
use App\Books;
use App\Readed;

class sortsBy extends Controller
{
    public function sortBy(){
        $Routes = [];
        foreach (app('sortsBy') as $sortBy) {
            $Routes[] = $sortBy->sortByRoutes;
        }
        if (in_array(Route::currentRouteName(),$Routes)){
            $get = sortBy::where('sortByRoutes',Route::currentRouteName())->first();
            if (strpos($get->Sql,'-')){
                $test = Books::orderBy($get->Sql,'desc')->paginate(36);
                return view(app('normal').'.Home',['books'=>$test]);
            }
            /*$test = Books::orderBy($get->Sql,'desc')->paginate(36);
            /*foreach ($test as $key) {
                $test1 = Books::where('id',$key->idOfBook)->paginate(36);
            }
            app()->singleton('title',function(){
                return trans('Titles.Index');
            });
            return view(app('normal').'.Home',['books'=>$test]);*/
        }else{
            return redirect()->back();
        }
    }
}