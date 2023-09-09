<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Datatable;
use Validator;
use Hash;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }

    public function logged_out(Request $request) {
          Auth::logout();
          return redirect('/admin');
    }

    public function password_edit(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required',
     ]);


      if ($validation->fails()) {
            return response()->json(['error'=> true, 'message' => $validation->errors()->first()]);
        }





       $password = DB::table('users')->value('password');


       
        if(Hash::check(request('old_password'), $password))
        {
            $n_password = $request->new_password;

               $new_password = Hash::make($n_password);
        }else
        {
            return response()->json(['error'=> true, 'message' => 'Old password and New password are not Match']);
        }


                       $data = [
                                'password' => $new_password,
                            ];


      $update =  DB::table('users')->update($data);

     

       if ($update == true) {

         
            return response()->json(['error'=> false, 'message' =>'Password Updated Successfully!']);


        }
        return response()->json(['error'=> true, 'message' => 'Somthing went Wrong, Please Try Again']);

  
    }

    

   

}
