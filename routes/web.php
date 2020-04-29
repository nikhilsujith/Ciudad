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
    return view('user.home',compact('title'));
});

Route::get('/equipos', function () {
    $title = "Equipos";
    return view('user.equipos',compact('title'));
});

Route::get('/nosotros', function () {
    $title = "nosotros";
    return view('user.nosotros',compact('title'));
});

//inicio page routes
Route::get('inicio','loginController@index');
Route::post('/RegisterUser','loginController@store');

//contacto page routes
Route::get('contacto','contactoController@index');//direct to controller to get page
Route::post('/ContactoAdd','contactoController@store'); //to insert into db


/*User Login Routes*/
Route::get('/login','LoginController@showLogin');
Route::post('/doLogin','LoginController@doLogin');
Route::get('/successLogin','LoginController@successLogin');
Route::get('/logout','LoginController@logout');

/*User Dashboard Routes*/
Route::get('OrganizeEvents','EventsController@showEvents'); //display organize page
Route::get('ParticipateEvents','EventsController@ParticipateEvents'); //Registers event participation
Route::get('MyParticipation','EventsController@MyParticipation'); //Registers event participation
Route::post('AddEvents','EventsController@AddEvents');

//Teams route

Route::resource('teams','TeamsAdminController');


//Admin Routes ------------------------------------------------------------------------------------------------|

Route::prefix('/admin')->namespace('Admin')->group(function(){
    Route::get('/','AdminLoginController@index');
    
    Route::resource('events','EventsAdminController');
    Route::get('/participants','ParticipantsAdminController@index');
    Route::resource('/issues','IssuesAdminController');
    Route::post('AdminAdd','AdminLoginController@store');
    /*Admin Login Routes*/
    Route::post('/doAdminLogin','AdminLoginController@doAdminLogin');
    Route::get('/successAdminLogin','AdminLoginController@successAdminLogin');
    Route::get('/logout','LoginController@logout');
});
