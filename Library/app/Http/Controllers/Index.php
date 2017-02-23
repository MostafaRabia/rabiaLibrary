<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\Types;
use App\typesOfTypes;
use App\Authors;
use Illuminate\Support\Facades\Route;

class Index extends Controller
{
    public function homePage(){
    	app()->singleton('title',function(){
            return trans('Titles.Index');
        });
    	$getAllBooks = Books::paginate(36);
    	return view(app('normal').'.Home',['books'=>$getAllBooks]);
    }
    public function typesOfTypes(Request $r,$idOfTypeOfTypes = null){
    	// To Get Books By Id Of Type ($idOfTypeOfTypes)
    	if ($idOfTypeOfTypes==null){
    		$getBooks = Books::where('Type',Route::currentRouteName())->paginate(36);
    	}elseif ($idOfTypeOfTypes!=null) {
    		$getBooks = Books::where('typeOfTypes',$idOfTypeOfTypes)->paginate(36);
    	}
    	// To Get All typesOfTypes By Id Of Type ($idOfTypeOfTypes)
    	$getAllTypeOfTypes = Types::find(Route::currentRouteName())->typesOfTypes;
    	// Title
    	if ($idOfTypeOfTypes==null){
    		app()->singleton('title',function(){
            	return trans('Titles.'.Route::currentRouteName());
        	});
        }elseif ($idOfTypeOfTypes!=null) {
        	app()->singleton('title',function() use ($idOfTypeOfTypes){
            	return trans('Titles.'.Route::currentRouteName().'/'.$idOfTypeOfTypes);
        	});
        }
    	// To Put The All typesOfTypes Id In Array To Compare It
    	$Ids = [];
        foreach ($getAllTypeOfTypes as $typesOfTypes){
        	$Ids[] = $typesOfTypes->id;
        }
    	if ($idOfTypeOfTypes!=null){
    		// Type Has No Any typesOfTypes
    		if (count($getAllTypeOfTypes)==0){
    			return redirect()->back();
    		}
    		// The typesOfTypes Is Revers On Another Type
    		elseif (!in_array($idOfTypeOfTypes,$Ids)){
    			return redirect()->back();
    		}
    		// All Things Is Right
    		elseif (in_array($idOfTypeOfTypes,$Ids)&&count($getAllTypeOfTypes)>0) {
    			return view(app('normal').'.typeOfTypes',['typeOfTypes'=>$getAllTypeOfTypes,'idOfTypeOfTypes'=>$idOfTypeOfTypes,'books'=>$getBooks]);
    		}
    	}
    	// Is Clear
    	elseif ($idOfTypeOfTypes==null) {
    		return view(app('normal').'.typeOfTypes',['typeOfTypes'=>$getAllTypeOfTypes,'idOfTypeOfTypes'=>$idOfTypeOfTypes,'books'=>$getBooks]);
    	}
	}
}
