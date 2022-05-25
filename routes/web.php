<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testinController;
use App\Http\Controllers\httpClint;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/CoustomPage', function () {
    return view('CoustomPage');
});
// Route::get("contRout",[testincontroller::class,'controllrrTest']);

// ########### With Parameter ########

Route::get("contRout/{name}",[testincontroller::class,'controllrrTest']);

Route::get("httpclint",[httpClint::class,'HttpClint']);


// #############################
##### Other Way Of Routing #####
################################
// Route::view("CoustomPage","/CoustomPage");

// ###############################
##### Routing Whit Prameters #####
##################################

// Route::get('/CoustomPage/{name}', function ($name) {

//     return view('CoustomPage',['name'=>$name]);

// });
