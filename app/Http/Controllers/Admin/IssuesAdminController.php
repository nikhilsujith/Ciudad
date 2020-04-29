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
        $issues = ContactoModel::orderBy('id')->paginate(5);
  
        return view('admin/issues.index',compact('issues'))
            ->with('i', (request()->input('page', 1) - 1) * 4);
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
            'cPhone' => 'required',
            'cName'=>'required',
            'cTitle'=>'required',
            'cDesc'=>'required',
            
        ]);
        ContactoModel::create($request->all());
        return redirect('/admin/issues/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContactoModel $issues
     * @return \Illuminate\Http\Response
     */
    public function show(ContactoModel $issue)
    {
        return view('admin/issues.show', compact('issue'));
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param  \App\ContactoModel  $issues
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactoModel $issue)
    {
        return view('admin/issues.edit',compact('issue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *  @param  \App\ContactoModel  $issues
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactoModel $issue)
    {
        $request->validate([
            'cPhone' => 'required',
            'cName'=>'required',
            'cTitle'=>'required',
            'cDesc'=>'required',
            
        ]);
        $entryArray=[
            'cPhone' => $request->cPhone,
            'cName'=>$request->cName,
            'cTitle'=>$request->cTitle,
            'cDesc'=>$request->cDesc,
        ];
        //dd(($request->cPhone));
        $issue = ContactoModel::where('id',$issue->id);
        $issue->update($entryArray);
        //dd(("hello"));
        return redirect('/admin/issues/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactoModel  $issues
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactoModel $issue)
    {
      
        $t = ContactoModel::where('id',$issue->id);
        $t->delete();
        return redirect('/admin/issues/');;}
}
