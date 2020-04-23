<?php

namespace App\Http\Controllers;

use App\ContactoModel;
use Illuminate\Http\Request;


class contactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'contacto';
        $contacto = ContactoModel::all();
        return view('user_view.contacto',compact('contacto','title')); //pass varibles to the view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'cPhone' => 'required',
            'cName' => 'required',
            'cTitle' => 'required',
            'cDesc' => 'required',
        ]);

        $contacto = new ContactoModel();

        $contacto->cPhone = $request->input('cPhone');
        $contacto->cName = $request->input('cName');
        $contacto->cTitle = $request->input('cTitle');
        $contacto->cDesc = $request->input('cDesc');

        $contacto->save();

        return redirect('/contacto')->with('success','Request Registered');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
