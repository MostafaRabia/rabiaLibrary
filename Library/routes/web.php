<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/',function(){
	return redirect('/home');
});
Route::get('/home','Index@homePage');
foreach (app('types') as $Route){
	Route::get('section/'.$Route->id.'/{idOfType?}','Index@typesOfTypes')->where('idOfType','[0-9]+')->name($Route->id);
}
foreach (app('sortsBy') as $getAllSortsBy) {
	Route::get('sortby/'.$getAllSortsBy->sortByRoutes,'sortsBy@sortBy')->name($getAllSortsBy->sortByRoutes);
}
Route::get('book/{id?}',function($id){
	return "DIDN'T FINISH YET , OR START";
})->where('id','[0-9]+');