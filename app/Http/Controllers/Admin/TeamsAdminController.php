<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers;

class TeamsAdminController extends Controllers\Controller
{
    public function _construct(){
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        $title = "teams";
        return view ('admin.teams',compact('title'));
    }
}
