<?php

namespace App\Http\Controllers\Admin;

use App\ParticipateModel;
use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;


class ParticipantsAdminController extends Controllers\Controller
{
    public function index()
    { 
        $participants = ParticipateModel::latest()->paginate(5);
  
        return view('admin/participants.index',compact('participants'))
            ->with('i', (request()->input('page', 1) - 1) * 7);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/participants.create');
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
            'eName' => 'required',
            'eRegUser'=>'required',
            'eOrganizer'=>'required',
            'eLocation'=>'required',
            'eSpots'=>'required',
            'eDesc'=>'required',
        ]);
        ParticipateModel::create($request->all());
        return redirect()->route('admin/participants')
                         ->with('success','participant created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ParticipateModel  $participants
     * @return \Illuminate\Http\Response
     */
    public function show(ParticipateModel $participant)
    {
        return view('admin/participants.show', compact('participant'));
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param  \App\ParticipateModel  $participants
     * @return \Illuminate\Http\Response
     */
    public function edit(ParticipateModel $participant)
    {
        return view('admin/participants.edit',compact('participant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *  @param  \App\ParticipateModel  $participants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParticipateModel $participant)
    {
        $request->validate([
            'eName' => 'required',
            'eRegUser'=>'required',
            'eOrganizer'=>'required',
            'eLocation'=>'required',
            'eSpots'=>'required',
            'eDesc'=>'required',
        ]);
        // dd($request);
        $participant->update($request->all());
        return redirect('/admin/participants/');
        // dd(123);
        // Route::redirect('/admin/');
        // return redirect()->route('/admin/')
                        //  ->with('success','participant updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ParticipateModel $participants
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParticipateModel $participant)
    {
      
        $t = ParticipateModel::where('id',$participant->id);
        $t->delete();
        return redirect('admin/participants');}

     
}
