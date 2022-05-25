<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// ############## db Connection Whit Out Model ###############
// use Illuminate\Support\Facades\DB;


use App\Models\UserDetail;


class testinController extends Controller
{


    // function controllrrTest(){
    //     echo 'hellow Controller';
    // }

    // ########### With Parameter ########


    function controllrrTest($name){
        // return 'hello'. ' '.$name.' ' .'Controller';
        // echo 'db connect ' ;
// ############## db Connection Whit Out Model ###############
    //   return  DB::select('select * from UserDetails');

// ############## db Connection Whit Model ###############
return UserDetail::all();

    }


}
