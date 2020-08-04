<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function welcome(Request $request){
        return view('welcome');
        //dd($request["first_name"]);
    }

    public function welcome_post(Request $request){
         //dd($request->all());
        $nama_awal=$request["first_name"];
        $nama_akhir=$request["last_name"];
        echo "<h2>Selamat Datang $nama_awal $nama_akhir</h2>";
        return view('welcome');
    }
}