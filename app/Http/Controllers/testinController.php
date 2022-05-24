<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testinController extends Controller
{


    // function controllrrTest(){
    //     echo 'hellow Controller';
    // }

    // ########### With Parameter ########


    function controllrrTest($name){
        return 'hello'. ' '.$name.' ' .'Controller';
    }


}
