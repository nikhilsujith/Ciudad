<?php

namespace App\Http\Controllers\Admin;

use App\EventsModel;
use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;


class EventsAdminController extends Controllers\Controller
{
    public function index()
    { 
        $events = EventsModel::latest()->paginate(5);
  
        return view('admin/events.index',compact('events'))
            ->with('i', (request()->input('page', 1) - 1) * 7);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/events.create');
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
        EventsModel::create($request->all());
        return redirect()->route('admin/events')
                         ->with('success','Event created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EventsModel  $events
     * @return \Illuminate\Http\Response
     */
    public function show(EventsModel $event)
    {
        return view('admin/events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param  \App\EventsModel  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(EventsModel $event)
    {
        return view('admin/events.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *  @param  \App\EventsModel  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EventsModel $event)
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
        $event->update($request->all());
        return redirect('/admin/events/');
        // dd(123);
        // Route::redirect('/admin/');
        // return redirect()->route('/admin/')
                        //  ->with('success','Event updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EventsModel $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventsModel $event)
    {
      
        $t = EventsModel::where('id',$event->id);
        $t->delete();
        return redirect()->route('admin/events')
                         ->with('success','Event deleted');}

     
}
