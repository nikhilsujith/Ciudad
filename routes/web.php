<?php

use Illuminate\Support\Facades\Route;
use App\Mail\IssuesMail;
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

// Route::get('/email', function () {
//     Mail::to('batman@email.com')->send(new IssuesMail());
//     return new IssuesMail();
// });



Route::get('/nosotros', function () {
    $title = "nosotros";
    return view('user.nosotros',compact('title'));
});

//Equipos page routes
Route::get('/equipos','EquiposController@display');

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

/*User Footer Routes*/
Route::post('/AddFooterEmail','contactoController@AddFooterEmail');


//Admin Routes ------------------------------------------------------------------------------------------------|
Route::prefix('/admin')->namespace('Admin')->group(function(){
    Route::get('/','AdminLoginController@index');
//    Route::get('teams','TeamsAdminController@showTeams');
    Route::get('/events','EventsAdminController@index');
    Route::get('/participants','ParticipantsAdminController@index');
    Route::get('/issues','IssuesAdminController@index');
    Route::post('AdminAdd','AdminLoginController@store');

    /*Admin Login Routes*/
    Route::post('/doAdminLogin','AdminLoginController@doAdminLogin');
    Route::get('/successAdminLogin','AdminLoginController@successAdminLogin');
    Route::get('/logout','AdminLoginController@logout');

    /*Admin Team Routes*/
    Route::post('/uploadfile','TeamsAdminController@upload'); //add member and member photo
    Route::get('editTeams','TeamsAdminController@editTeams'); //edit team member
    Route::patch('updateTeams','TeamsAdminController@updateTeams'); //edit team member
    Route::get('deleteTeams','TeamsAdminController@deleteTeams'); //edit team member

    /*Admin Event Routes*/
    Route::get('OrganizeEvents','EventsController@showEvents'); //display organize page
    Route::post('AddEvents','EventsAdminController@AddEvents'); //add events
    Route::get('eventsEdit','EventsAdminController@EditEvents'); //edit team member
    Route::patch('UpdateEvents','EventsAdminController@UpdateEvents'); //edit events
    Route::get('DeleteEvents','EventsAdminController@DeleteEvents'); //delete events
    
    /*Admin Participant Routes*/
    Route::get('participantEdit','ParticipantsAdminController@EditParticipants'); //delete participants
    Route::patch('UpdateParticipants','ParticipantsAdminController@UpdateParticipants'); //edit events
    Route::get('DeleteParticipants','ParticipantsAdminController@DeleteParticipants'); //delete participants
    
    /*Admin Issues Route*/
    Route::get('DeleteIssues', 'IssuesAdminController@DeleteIssues');

});
//Admin Routes End------------------------------------------------------------------------------------------------|


