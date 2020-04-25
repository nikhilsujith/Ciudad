<?php

namespace App\Http\Controllers;

use App\InicioModel;
use Illuminate\Http\Request;
use Validator;
Use Auth;

class PageController extends Controller
{
    /*------------------------USER DASHBOARD---------------------------------*/
    function ParticipateEvent(){
        $title = 'Participate in an Event';
        return view('user.participate',compact('title'));
    }
}
