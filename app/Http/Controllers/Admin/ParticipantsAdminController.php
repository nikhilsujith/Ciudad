<?php

namespace App\Http\Controllers\Admin;

use App\ParticipateModel;
use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;


class ParticipantsAdminController extends Controllers\Controller
{
    public function index()
    {   $title = "Participants";
        $participants = ParticipateModel::latest()->paginate(5);
  
        return view('admin/participants',compact('participants', 'title'))
            ->with('i', (request()->input('page', 1) - 1) * 7);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AddParticipants()
    {
        $this->validate($request, [
            'eventName' => 'required',
            'participantName' => 'required',
            
        ]);

        $participants = new ParticipateModel(); //object of ContactoModel class

        $participants->eventName = $request->input('eventName');
        $participants->participantName = $request->input('participantName');
        

        $participants->save();

        return redirect('admin/participants')->with('success','Request Registered');
    }


    public function DeleteParticipants(Request $request){
        $participantID = $request->all(); //get event id from view

        $participantDelete = ParticipateModel::where('id',$participantID)->delete();
        
        return redirect('admin/participants')->with('success','Participant Deleted');
    }

    public function EditParticipants(Request $request){

        $title = "Edit Participants";

        $participantID = $request->all();

        $participantAll = ParticipateModel::where('id',$participantID)->get();

        return view('admin/participantEdit',compact('participantAll','title'));

    }

    public function UpdateParticipants(Request $request){
        $this->validate($request, [
            'eventName' => 'required',
            'participantName' => 'required',

        ]);


        $ParticipateModel = new ParticipateModel();

        $participants = $ParticipateModel->where('id',$request->input('pid'))->update(['eventName' => $request->input('eventName')]);
        $participants = $ParticipateModel->where('id',$request->input('pid'))->update(['participantName' => $request->input('participantName')]);
        


        return redirect('admin/participants')->with('success','Participant Updated');

    }

     
}
