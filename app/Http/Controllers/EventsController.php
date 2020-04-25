<?php

namespace App\Http\Controllers;

use App\EventsModel;
use App\ParticipateModel;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;
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

    public function ParticipateEvents(Request $request){

        $title = "Event Participation";
        $participant = new ParticipateModel();
        $participant->eventName = $request->input('iName');
        $participant->participantName = $request->input('pName');
        $participant->save();

        return redirect('/OrganizeEvents')->with('success','Event Participation Registered');


//        $myParticipationOnly = ParticipateModel::all()->toArray();

//        $myParticipationOnly = $participant::all('eventName');
   /*     $myParticipationOnly = DB::table('participants')
            ->where('participantName', 'pName')
            ->get();*/

//        return view('OrganizeEvents',compact('participant','title','myParticipationOnly'))->with('success','Request Registered');
    }

    public function MyParticipation(){

        $title = "My Participations";

        $myParticipationOnly = ParticipateModel::where('participantName',Auth::user()->uName)->get();

        $duplicateRecords = ParticipateModel::where('participantName',Auth::user()->uName)
            ->selectRaw('count(`eventName`) as `occurences`')
            ->from('participants')
            ->groupBy('eventName')
            ->having('occurences', '>', 1)
            ->get();

        return view ('user.participate',compact('title','myParticipationOnly','duplicateRecords'));
    }
}
