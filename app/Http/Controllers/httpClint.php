<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;


class httpClint extends Controller
{
  function HttpClint(){
    $data =Http::get('https://reqres.in/api/users?page=1');

    return view('httpClintDisply',['res'=>$data['data']]);
  }
}
