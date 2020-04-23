<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    $title = "Inicio De Session";
    return view('user_view.home',compact('title'));
});

Route::get('/inicio', function () {
    $title = "Inicio De Session";
    return view('user_view.inicio',compact('title'));
});

Route::get('/equipos', function () {
    $title = "Equipos";
    return view('user_view.equipos',compact('title'));
});

Route::get('/equipos', function () {
    $title = "Equipos";
    return view('user_view.equipos',compact('title'));
});

//contacto page
Route::get('contacto','contactoController@index');//direct to controller to get page
Route::post('/ContactoAdd','contactoController@store'); //to insert into db

