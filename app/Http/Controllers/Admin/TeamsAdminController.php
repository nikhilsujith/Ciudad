<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Teams;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use MongoDB\Driver\Session;

class TeamsAdminController extends Controller
{

    function upload(Request $request)
    {
        $this->validate($request, [
            'tName' => 'required',
            'tLocation' => 'required',
            'tBoard' => 'required',
            'select_file'  => 'required|image|mimes:jpeg,jpg,png,gif|max:2048'
        ]);


        $teams = new Teams(); //object of TEams class

        $teams->tName = $request->input('tName');
        $teams->tLocation= $request->input('tLocation');
        $teams->tBoard = $request->input('tBoard');

        $image = $request->file('select_file'); //selecting file from input
        $avatar = $image->getClientOriginalName(); //getting the file name

        $teams->avatar = $avatar; //store file name to avatar column

        $teams->save();

        $image->move(public_path('images'), $avatar);

        return back()->with('success', 'Team Member Added Successfully')->with('path', $avatar);
    }

    public function editTeams(Request $request){

        $title = "Edit Teams";

        $teamID = $request->all();

        $teamsAll = Teams::where('id',$teamID)->get();

        return view('admin/teamsEdit',compact('teamsAll','title'));

    }

    public function updateTeams(Request $request){
        $this->validate($request, [
            'tName' => 'required',
            'tLocation' => 'required',
            'tBoard' => 'required',
            'select_file'  => 'required|image|mimes:jpeg,jpg,png,gif|max:2048'
        ]);

        $image = $request->file('select_file'); //selecting file from input
        $avatar = $image->getClientOriginalName(); //getting the file name

        $TeamModel = new Teams();

        $teams = $TeamModel->where('id',$request->input('tid'))->update(['tName' => $request->input('tName')]);
        $teams = $TeamModel->where('id',$request->input('tid'))->update(['tLocation' => $request->input('tLocation')]);
        $teams = $TeamModel->where('id',$request->input('tid'))->update(['tBoard' => $request->input('tBoard')]);
        $teams = $TeamModel->where('id',$request->input('tid'))->update(['avatar' => $avatar]);

        $image->move(public_path('images'), $avatar);
        return redirect('admin/successAdminLogin')->with('success','Data Updated');

    }

    public function deleteTeams(Request $request){


        $teamID = $request->all();

        $teamsDelete = Teams::where('id',$teamID)->delete();

        return redirect('admin/successAdminLogin')->with('success','Team Member Deleted');

    }

}
