<?php

namespace App\Http\Controllers;

use App\Teams;
use Illuminate\Http\Request;
use App\Http\Requests;

class UploadfileController extends Controller
{
   /* function index()
    {
        return view('admin.teams.index');
    }*/

    function upload(Request $request)
    {


        $this->validate($request, [
            'tName' => 'required',
            'tLocation' => 'required',
            'tBoard' => 'required',
            'select_file'  => 'required|image|mimes:jpeg,jpg,png,gif|max:2048'
        ]);


        $teams = new Teams(); //object of ContactoModel class

        $teams->tName = $request->input('tName');
        $teams->tLocation= $request->input('tLocation');
        $teams->tBoard = $request->input('tBoard');
        $teams->save();
        $image = $request->file('select_file'); //selecting file
        $new_name = $image->getClientOriginalName(); //getting the file name

        $image->move(public_path('images'), $new_name);

        return back()->with('success', 'Team Member Added Successfully')->with('path', $new_name);
    }
}
?>
