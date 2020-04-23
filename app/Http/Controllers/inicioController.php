<?php

namespace App\Http\Controllers;

use App\InicioModel;
use Illuminate\Http\Request;

class inicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user_view.inicio'); //return view inicio

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
            'uName' => 'required',
            'uPassword' => 'required',
            'uEmail' => 'required',
            'uLocation' => 'required',
        ]);

        $inicio = new InicioModel(); //object of InicioModel class

        $inicio->uName = $request->input('uName');
        $inicio->uPassword = $request->input('uPassword');
        $inicio->uEmail = $request->input('uEmail');
        $inicio->uLocation = $request->input('uLocation');

        $inicio->save(); //saves inicio inputs

        return redirect('/inicio')->with('success','User Registered');

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
