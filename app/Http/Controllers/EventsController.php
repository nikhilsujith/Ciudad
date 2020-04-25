<?php

namespace App\Http\Controllers;

use App\EventsModel;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;

class EventsController extends Controller
{
    public function showEvents(){
        $title = 'Organize an Event';
        $events = EventsModel::all()->toArray();
        return view ('user.organize',compact('events','title'));
    }

    public function AddEvents(Request $request){
        $this->validate($request, [
            'eName' => 'required',
            'eOrganizer' => 'required',
            'eLocation' => 'required',
            'eDate' => 'required',
            'eSpots'=> 'required|min:1',
            'eDesc' => 'required',
        ]);

        $events = new EventsModel(); //object of ContactoModel class

        $events->eName = $request->input('eName');
        $events->eOrganizer = $request->input('eOrganizer');
        $events->eLocation= $request->input('eLocation');
        $events->eDate = date("Y-m-d", strtotime($request->input('eDate')));
        $events->eSpots= $request->input('eSpots');
        $events->eDesc= $request->input('eDesc');
        $events->eRegUser = $request->input('eRegUser');

        $events->save();

        return redirect('/OrganizeEvents')->with('success','Request Registered');
    }
}
