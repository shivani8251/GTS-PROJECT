<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Datatable;
use Validator;

class CountryController extends Controller
{

     public function contrylist()
    {
        return view('Master/contry');
    }


    public function uploadflag(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'country_name' => 'required',
      'flag' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
     ]);

      if ($validation->fails()) {
            return response()->json(['error'=> true, 'message' => $validation->errors()->first()]);
        }

     
        $country = $request->country_name;


        
      $image = $request->file('flag');

      $im = rand(1000, 9999);

      $new_name = $country.'_'.$im.'.' . $image->getClientOriginalExtension();

      // $file = $request->file->storeAs('public/upload/flag', $new_name);



      $image->move(public_path('public/upload/flag'), $new_name);

                  $data = [
                                'name' => $country,
                                'flag' => $new_name,
                          ];


      $insert = DB::table('country')->insert($data);



       if ($insert == true) {
         
            return response()->json(['error'=> false, 'message' =>'Data Added Successfully!']);
        }
        return response()->json(['error'=> true, 'message' => 'Somthing went Wrong, Please Try Again']);

  
    }

    public function upload_edit_flag(Request $request)
    {
      
       
        $validation = Validator::make($request->all(), [
            'name_country' => 'required',
      'flag_name' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
     ]);

      if ($validation->fails()) {
            return response()->json(['error'=> true, 'message' => $validation->errors()->first()]);
        }

        $id = $request->id;

     
        $country = $request->name_country;


        
      $image = $request->file('flag_name');

      $im = rand(1000, 9999);

      $new_name = $country.'_'.$im.'.' . $image->getClientOriginalExtension();

      // $file = $request->file->storeAs('public/upload/flag', $new_name);

      $image->move(public_path('public/upload/flag'), $new_name);

                  $data = [
                                'name' => $country,
                                'flag' => $new_name,
                            ];


      $update =  DB::table('country')->where('id', $id)->update($data);

       if ($update == true) {
         
            return response()->json(['error'=> false, 'message' =>'Data Updated Successfully!']);
        }
        return response()->json(['error'=> true, 'message' => 'Somthing went Wrong, Please Try Again']);

  
    }


    
        public function data(Request $request)
    {
        if($request->ajax()){
            $rows = DB::table('country')->orderBy('id', 'desc')->get();
           
            return DataTables()->of($rows)->addIndexColumn()
            ->addColumn('id', function($data){
                return $data->id;
            })
           ->addColumn('name', function($data){
                return $data->name;
            })
           ->addColumn('flag', function($data){
                // $flag = '-';
                if(isset($data->flag))
                {
                    $path = asset('public/public/upload/flag/'.$data->flag);
                    $flag = '<a href="'.$path.'" target="_BLANK"><img src="'.$path.'" height="auto" width="50" /></a>';
                }
                return $flag;
                })

                     
            ->addColumn('Is_active', function($data){
                if($data->Is_active=="Yes")
                {
                    $Is_active = '<span class="badge badge-pill badge-success">Active</span>';
                }
                else
                {
                    $Is_active = '<span class="badge badge-pill badge-danger">Inactive</span>';
                }

                return $Is_active;
            })

            ->addColumn('actions', function($data){
                $buttons = '<div class="ui" style="width: 100px;">';
                $buttons .= '<a href="javascript:void(0);" data-id="'.$data->id.'" class="btn btn-sm btn-primary edit_btn" data-toggle="tooltip" data-placement="top" title="Edit Detail" style="padding:.700rem .666rem;" ><i class="bx bx-edit"></i></a>';
                if($data->Is_active=="Yes")
                    {
                        $buttons .= ' <a href="javascript:void(0);" data-id="'.$data->id.'" class="btn btn-sm btn-danger deactivate-project-btn" data-toggle="tooltip" data-placement="top" title="Block Detail" style="padding:.700rem .666rem;" ><i class="bx bx-block"></i></a>';
                    }
                    else
                    {
                        $buttons .= ' <a href="javascript:void(0);" data-id="'.$data->id.'" class="btn btn-sm btn-success activate-project-btn" data-toggle="tooltip" data-placement="top" title="Activate Detail" style="padding:.700rem .666rem;" ><i class="bx bx-check"></i></a>';
                    }
                $buttons .= '</div>';
                return $buttons;
            })
            
            ->rawColumns(['id', 'name', 'flag','Is_active', 'actions'])
            // ->rawColumns(['id', 'name', 'owner', 'address', 'contact','Is_active'])
            ->make(true);
        }
    }

     public function get_data(Request $request)
    {
       
            $id = $request->id;
           
            
            $rows = DB::table('country')->where('id', $id)->first();
           
          

            return response()->json($rows);
        
    }

    public function deactivate(Request $request)
    {
        $id = $request->id;

         $data = [
                                'Is_active' => "No",
                            ];

       
       $query =  DB::table('country')->where('id', $id)->update($data);

       
    
       
        if ($query>0)
        {
            return response()->json(['error'=> false, 'message' => 'Details deactivated successfully !']);
            
        }
        else
        {
            return response()->json(['error'=> true, 'message' => 'Something went wrong !',]);
        }
    }

    public function activate(Request $request)
    {
        $id = $request->id;

         $data = [
                                'Is_active' => "Yes",
                            ];

       
       $query =  DB::table('country')->where('id', $id)->update($data);

       
        if ($query>0)
        {
            return response()->json(['error'=> false, 'message' => 'Details Activated successfully !']);
            
        }
        else
        {
            return response()->json(['error'=> true, 'message' => 'Something went wrong !',]);
        }
    }


}
