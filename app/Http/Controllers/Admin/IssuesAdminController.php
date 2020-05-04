<?php

namespace App\Http\Controllers\Admin;

use App\ContactoModel;
use Illuminate\Http\Request;
use App\Http\Controllers;

class IssuesAdminController extends Controllers\Controller
{
    // public function _construct(){
    //     $this->middleware('auth:admin');
    // }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {   
        $title = "Issues";
        $issues = ContactoModel::latest()->paginate(5);
  
        return view('admin/issues',compact('issues', 'title'))
            ->with('i', (request()->input('page', 1) - 1) * 7);
    }



    public function DeleteIssues(Request $request){
        $issueID = $request->all(); //get event id from view

        $issueDelete = ContactoModel::where('id',$issueID)->delete();
        
        return redirect('admin/issues')->with('success','Issues Deleted');
    }
}
