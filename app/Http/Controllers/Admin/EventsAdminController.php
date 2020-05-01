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
        $title = "Admin > Events";
        $events = EventsModel::latest()->paginate(5);

        return view('admin/events',compact('events','title'))
            ->with('i', (request()->input('page', 1) - 1) * 7);
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

        return redirect('admin/events')->with('success','Request Registered');
    }

    public function DeleteEvents(Request $request){
        $eventID = $request->all(); //get event id from view

        $eventDelete = EventsModel::where('id',$eventID)->delete();

        return redirect('admin/events')->with('success','Event Deleted');
    }

    public function EditEvents(Request $request){

        $title = "Edit Events";

        $eventID = $request->all();

        $eventsAll = EventsModel::where('id',$eventID)->get();

        return view('admin/eventsEdit',compact('eventsAll','title'));

    }

    public function UpdateEvents(Request $request){
        $this->validate($request, [
            'eName' => 'required',
            'eLocation' => 'required',
            'eDesc' => 'required'
//            'eDate' => 'required',
//            'eOrganizer'  => 'required|image|mimes:jpeg,jpg,png,gif|max:2048'
        ]);


        $EventsModel = new EventsModel();

        $events = $EventsModel->where('id',$request->input('eid'))->update(['eName' => $request->input('eName')]);
        $events = $EventsModel->where('id',$request->input('eid'))->update(['eLocation' => $request->input('eLocation')]);
        $events = $EventsModel->where('id',$request->input('eid'))->update(['eDesc' => $request->input('eDesc')]);


        return redirect('admin/events')->with('success','Events Updated');

    }


//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        return view('admin/events.create');
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
//        $request->validate([
//            'eName' => 'required',
//            'eRegUser'=>'required',
//            'eOrganizer'=>'required',
//            'eLocation'=>'required',
//            'eSpots'=>'required',
//            'eDesc'=>'required',
//        ]);
//        EventsModel::create($request->all());
//        return redirect()->route('admin/events')
//                         ->with('success','Event created');
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  \App\EventsModel  $events
//     * @return \Illuminate\Http\Response
//     */
//    public function show(EventsModel $event)
//    {
//        return view('admin/events.show', compact('event'));
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  \App\EventsModel  $events
//     * @return \Illuminate\Http\Response
//     */
//    public function edit(EventsModel $event)
//    {
//        return view('admin/events.edit',compact('event'));
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     *  @param  \App\EventsModel  $events
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, EventsModel $event)
//    {
//        $request->validate([
//            'eName' => 'required',
//            'eRegUser'=>'required',
//            'eOrganizer'=>'required',
//            'eLocation'=>'required',
//            'eSpots'=>'required',
//            'eDesc'=>'required',
//        ]);
//        // dd($request);
//        $event->update($request->all());
//        return redirect('/admin/events/');
//        // dd(123);
//        // Route::redirect('/admin/');
//        // return redirect()->route('/admin/')
//                        //  ->with('success','Event updated');
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\EventsModel $events
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy(EventsModel $event)
//    {
//
//        $t = EventsModel::where('id',$event->id);
//        $t->delete();
//        return redirect()->route('admin/events')
//                         ->with('success','Event deleted');
//    }


}
