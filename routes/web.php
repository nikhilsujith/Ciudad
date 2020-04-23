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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    $title = "Inicio De Session";
    return view('user_view.home',compact('title'));
});

Route::get('/equipos', function () {
    $title = "Equipos";
    return view('user_view.equipos',compact('title'));
});

Route::get('/nosotros', function () {
    $title = "nosotros";
    return view('user_view.nosotros',compact('title'));
});

//inicio page routes
Route::get('inicio','inicioController@index');
Route::post('/RegisterUser','inicioController@store');

//contacto page routes
Route::get('contacto','contactoController@index');//direct to controller to get page
Route::post('/ContactoAdd','contactoController@store'); //to insert into db

