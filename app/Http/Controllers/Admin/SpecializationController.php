<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Datatable;
use Validator;

class SpecializationController extends Controller
{
     public function specialization()
    {
        return view('Master/specialization');
    }

    public function list_index()
    {
        echo "Hello";
        // return view('institute/index');
    }

    public function Upload_special(Request $request)
    {
         

        $validator = Validator::make($request->all(), 
            [ 
              'specialization_name' => 'required',
            ]);

        if ($validator->fails()) {
            return response()->json(['error'=> true, 'message' => $validator->errors()->first()]);
        }

       

        
        $data = [
                    'spname' => $request->specialization_name,  
                ];
              

                 $insert = DB::table('specialization')->insert($data);
        
                if ($insert == true) {
                 
                    return response()->json(['error'=> false, 'message' =>'Data Added Successfully!']);
                }
                return response()->json(['error'=> true, 'message' => 'Somthing went Wrong, Please Try Again']);
    }

       public function special_data(Request $request)
    {
        if($request->ajax()){
            $rows = DB::table('specialization')->orderBy('id', 'desc')->get();
           
            return DataTables()->of($rows)->addIndexColumn()
            ->addColumn('id', function($data){
                return $data->id;
            })
           ->addColumn('spname', function($data){
                return $data->spname;
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
                        $buttons .= ' <a href="javascript:void(0);" data-id="'.$data->id.'" class="btn btn-sm btn-danger deactivate-special-btn" data-toggle="tooltip" data-placement="top" title="Block Detail" style="padding:.700rem .666rem;" ><i class="bx bx-block"></i></a>';
                    }
                    else
                    {
                        $buttons .= ' <a href="javascript:void(0);" data-id="'.$data->id.'" class="btn btn-sm btn-success activate-special-btn" data-toggle="tooltip" data-placement="top" title="Activate Detail" style="padding:.700rem .666rem;" ><i class="bx bx-check"></i></a>';
                    }
                $buttons .= '</div>';
                return $buttons;
            })
            
            ->rawColumns(['id', 'spname', 'Is_active', 'actions'])
            // ->rawColumns(['id', 'name', 'owner', 'address', 'contact','Is_active'])
            ->make(true);
        }
    }

    public function get_sp_data(Request $request)
    {
       
            $id = $request->id;
           
           $rows = DB::table('specialization')->where('id', $id)->first();
        
            return response()->json($rows);
        
    }

    public function edit_special(Request $request)
    {
        $validator = Validator::make($request->all(), 
            [ 
              'sname' => 'required',
            ]);

        if ($validator->fails()) {
            return response()->json(['error'=> true, 'message' => $validator->errors()->first()]);
        }

          $id = $request->id;

        
        $data = [
                    'spname' => $request->sname,  
                ];
              

                 $update =  DB::table('specialization')->where('id', $id)->update($data);
        
                if ($update == true) {
                 
                    return response()->json(['error'=> false, 'message' =>'Data Updated Successfully!']);
                }
                return response()->json(['error'=> true, 'message' => 'Somthing went Wrong, Please Try Again']);
    }

     public function deactivate_special(Request $request)
    {
        $id = $request->id;

         $data = [
                                'Is_active' => "No",
                            ];

       
       $query =  DB::table('specialization')->where('id', $id)->update($data);

           
        if ($query>0)
        {
            return response()->json(['error'=> false, 'message' => 'Details deactivated successfully !']);
            
        }
        else
        {
            return response()->json(['error'=> true, 'message' => 'Something went wrong !',]);
        }
    }

    public function activate_special(Request $request)
    {
        $id = $request->id;

         $data = [
                                'Is_active' => "Yes",
                            ];

       
       $query =  DB::table('specialization')->where('id', $id)->update($data);

           
        if ($query>0)
        {
            return response()->json(['error'=> false, 'message' => 'Details activated successfully !']);
            
        }
        else
        {
            return response()->json(['error'=> true, 'message' => 'Something went wrong !',]);
        }
    }


}
