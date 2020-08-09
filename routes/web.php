<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/', function () {
    return view('welcomelaravel');
});

//Route::<http-method>('<url>', <function callback>)

Route::get('/helo-laravel', function () {
    echo "Ini adalah halaman baru <br>";
    return "Hello Laravel";
});

Route::get('/helo/{nama}', function ($nama) {
    return "Hello $nama";
});

Route::get('/testi/{angka}', function ($angka) {
    return view ('test',["angka" => $angka]);
});

//akses diurl /form
//http://localhost:8000/form/
Route::get('/form', 'RegisterController@form');
Route::get('/sapa', 'RegisterController@sapa');
Route::post('/sapa', 'RegisterController@sapa_post');
*/


//Route::get('/', 'HomeController@home');

Route::get('/register', 'AuthController@register');

Route::get('/welcome', 'AuthController@welcome');

Route::post('/welcome', 'AuthController@welcome_post');

//masuk adminlte dahulu baru master. sudah dipindah folder
Route::get('/master', function() {
	return view('adminlte.master');
});

//contoh
Route::get('/items', function(){
    return view ('items.index');
});

Route::get('/items/create', function(){
    return view ('items.create');
});

//tugas
Route::get('/', function(){
    return view ('items.isiroute1');
});

Route::get('/data-tables', function(){
    return view ('items.isiroute2');
});

//crud contoh
Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts', 'PostController@index');
Route::get('/posts/{id}', 'PostController@show');
Route::get('/posts/{id}/edit', 'PostController@edit');
Route::PUT('/posts/{id}', 'PostController@update');
Route::delete('/posts/{id}', 'PostController@destroy');