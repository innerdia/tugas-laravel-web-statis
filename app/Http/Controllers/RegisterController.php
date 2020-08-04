<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function form(){
        return view('form');
    }

    public function sapa(request $request){
        //var_dump($request);
        //dd($request["alamat"]);
        return "hello";
    }

    public function sapa_post(request $request){
        dd($request->all());
        return "hello2";
    }
}
