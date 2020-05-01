<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel;
use App\InicioModel;
use App\ParticipateModel;
use App\Teams;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Exception;
use Auth;

class AdminLoginController extends Controller
{

    public function index()
    {
        $title = "Admin";
        return view('admin.admin',compact('title')); //return admin login page
        #admin.admin is /views/admin/admin-blade.php

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'aName' => 'required',
            'aPassword' => 'required|min:8',
            'aEmail' => 'required|email',
        ]);

        $Admin = new AdminModel(); //object of AdminModel class

            $Admin->aName = $request->input('aName');
            $Admin->aPassword = $request->input('aPassword');
            $Admin->aEmail = $request->input('aEmail');

        $Admin->save(); //saves admin inputs
        return redirect('admin/')->with('success','Admin User Registered');

    }

    public function doAdminLogin(Request $request){

        request()->validate([
            'aEmail' => 'required',
            'aPassword' => 'required',
        ]);

        $credentials = $request->only('aEmail', 'aPassword');

        if ($admin = AdminModel::where($credentials)->first()) {
            auth()->login($admin);
            return redirect()->intended('admin/successAdminLogin');
        }
        else{
//            return redirect::to('/login');
            return back()->with('error','Incorrect Login Credentials');
        }
    }

    function successAdminLogin(){
        #if login successfull return user dashboard

        $title = "Admin > Teams";

        $adminTeams= Teams::all()->toArray();

        return view ('admin.teams',compact('title','adminTeams'));
    }

    function logout(){
        Auth::logout();
        return redirect('admin');
    }


}
