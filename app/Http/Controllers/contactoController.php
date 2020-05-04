<?php

namespace App\Http\Controllers;
use App\Mail\IssuesMail;
use App\ContactoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        return view('user.contacto',compact('contacto','title')); //pass varibles to the view
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'cPhone' => 'required|min:10',
            'cName' => 'required',
            'cTitle' => 'required',
            'cDesc' => 'required',
        ]);

        $contacto = new ContactoModel(); //object of ContactoModel class

        $contacto->cPhone = $request->input('cPhone');
        $contacto->cName = $request->input('cName');
        $contacto->cTitle = $request->input('cTitle');
        $contacto->cDesc = $request->input('cDesc');

        $contacto->save();
        $data = [];
   /*     Mail::send('email.issues',$data,function($message){
              $message->from('nik98hil@gmail.com');
              $message->to('nikhilsujith@outlook.com');

        });*/

        return redirect('contacto')->with('success','Request Registered');
    }

    public function AddFooterEmail(Request $request){
        $this->validate($request, [
            'footerEmailInput' => 'required|email'
        ]);

        $contacto = new ContactoModel();

        $contacto->cEmail = $request->input('footerEmailInput');

        $contacto->save();

        Mail::to($contacto->cEmail)->send(new IssuesMail());

        return redirect('/inicio')->with('success','Thank you for reaching out to us!  A member of our team will get back to you shortly on the email you provided below!');
    }


}
