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
*/
 

Route::get('/', function () {
    return view('unica');
});

Route::get('/home', function () {
    return view('site.home');
});


Route::get('/quemsomos', function () {
    return view('site.quemsomos');
});

Route::get('/equipe', function () {
    return view('site.equipe');
});

Route::get('/case', function () {
    return view('site.case');
});

Route::get('/clientes', function () {
    return view('site.clientes');
});

Route::get('/login', function () {
    return view('site.login');
});

Route::prefix('/sistema')->group(function(){

Route::get('index', function () {
    return view('sistema');
});

});






