<?php

namespace App\Http\Controllers\Admin;

use App\Teams;
use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
class TeamsAdminController extends Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Teams::latest()->paginate(5);
  
        return view('admin/teams.index',compact('teams'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tName' => 'required',
            'tLocation'=>'required',
            'tBoard'=>'required',
            'tImage'=>'required',
        ]);
        Teams::create($request->all());
        return redirect('/admin/teams/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function show(Teams $team)
    {
        return view('admin/teams.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param  \App\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function edit(Teams $team)
    {
        return view('admin/teams.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teams $team)
    {
        $request->validate([
            'tName' => 'required',
            'tLocation'=>'required',
            'tBoard'=>'required',
            'tImage'=>'required',
        ]);
        $team->update($request->all());
        return redirect('/admin/teams/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teams $team)
    {
        // $team->delete();
        // return redirect()->route('teams.index')
        //                  ->with('success','Team member deleted');
        $t = Teams::where('id',$team->id);
        $t->delete();
        return redirect('/admin/teams/');

    }
}
