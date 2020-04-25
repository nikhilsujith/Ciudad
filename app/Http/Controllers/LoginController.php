<?php

namespace App\Http\Controllers;

use App\InicioModel;
use Illuminate\Http\Request;
use Validator;
Use Auth;

class loginController extends Controller
{

    public function index()
    {
        return view('user.inicio'); //return view inicio
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
            'uPassword' => 'required|min:8',
            'uEmail' => 'required|email',
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

    public function showLogin(){
        $title = 'login';
        return view('login',compact('title'));
    }

    public function doLogin(Request $request){

        request()->validate([
            'uEmail' => 'required',
            'uPassword' => 'required',
        ]);

        $credentials = $request->only('uEmail', 'uPassword');

        if ($user = InicioModel::where($credentials)->first()) {
            auth()->login($user);
            return redirect()->intended('/successLogin');
        }
        else{
//            return redirect::to('/login');
            return back()->with('error','Incorrect Login Credentials');
        }
    }

    function successLogin(){
        #if login successfull return user dashboard

        $title =  'User Dashboard';
        return view('user.dashboard',compact('title'));
    }

    function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
