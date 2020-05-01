<?php

namespace App\Http\Controllers;

use App\Teams;
use Illuminate\Http\Request;

class EquiposController extends Controller
{
    public function display(){
        $title = "Equipos";


        $teams = Teams::all()->toArray();

        return view('user.equipos',compact('title','teams'));
    }
}
