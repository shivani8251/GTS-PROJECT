<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Datatable;
use Validator;

class Student_Contact_Controller extends Controller
{
     public function Student_index()
    {
        return view('joinstudent/index');
    }    

    public function join_student_detail(Request $request)
    {        


        $validator = Validator::make($request->all(), 
            [ 
              'student_name' => 'required',
              'phone' => 'required',
            ]);

        if ($validator->fails()) {
            return response()->json(['error'=> true, 'message' => $validator->errors()->first()]);
        }
       

        
         $data = [
                                'student_name' => $request->student_name,
                                'email' => $request->email,
                                'phone' => $request->phone,
                                'applying_coching' => $request->coching_name,
                                'amount' => $request->amount,
                                'message' => $request->message,
                            ];
              

            $insert = DB::table('join_students')->insert($data);
        
                if ($insert == true) {
                 
                    return response()->json(['error'=> false, 'message' =>'Data Added Successfully!']);
                }
                return response()->json(['error'=> true, 'message' => 'Somthing went Wrong, Please Try Again']);
    }

       public function Student_data(Request $request)
    {
        if($request->ajax()){
            $rows = DB::table('join_students')->orderBy('id', 'desc')->where('status','Y')->get();
           
            return DataTables()->of($rows)->addIndexColumn()
            ->addColumn('id', function($data){
                return $data->id;
            })
           ->addColumn('student_name', function($data){
                return $data->student_name;
            })

           ->addColumn('phone', function($data){
                return $data->phone;
            })

           ->addColumn('email', function($data){
                return $data->email;
            })

             ->addColumn('applying_coching', function($data){
                // $country = ',';
                if (isset($data->applying_coching)) {
                    $applying_coching = DB::table('coching_list')->where('id', $data->applying_coching)->value('cooching_name');
                }
                return $applying_coching;
            })

           
              ->addColumn('amount', function($data){
                return $data->amount;
            })
     
         
            ->addColumn('actions', function($data){
                $buttons = '<div class="ui" style="width: 100px;">';
                $buttons .= '<a href="javascript:void(0);" data-id="'.$data->id.'" class="btn btn-sm btn-danger delt_btn" data-toggle="tooltip" data-placement="top" title="Edit Detail" style="padding:.700rem .666rem;" ><i class="bx bx-trash"></i></a>';
               
                $buttons .= '</div>';
                return $buttons;
            })
            
            ->rawColumns(['id', 'student_name','phone','email','applying_coching','amount', 'actions'])
            // ->rawColumns(['id', 'name', 'owner', 'address', 'contact','Is_active'])
            ->make(true);
        }
    }

    public function join_student_add()
    {
         $data['coching'] = DB::table('coching_list')->where('Is_active', 'Yes')->orderBy('cooching_name', 'ASC')->get();
        return view('joinstudent/add')->with($data);
    }


     public function student_data_delete(Request $request)
    {
        $id = $request->id;

         $data = [
                                'status' => "N",
                            ];

       
       $query =  DB::table('join_students')->where('id', $id)->update($data);

           
        if ($query>0)
        {
            return response()->json(['error'=> false, 'message' => 'Details Delete successfully !']);
            
        }
        else
        {
            return response()->json(['error'=> true, 'message' => 'Something went wrong !',]);
        }
    }

    public function contact_index()
    {
        return view('contact_detail/index');
    }

      public function Enquiry_data(Request $request)
    {
        if($request->ajax()){
            $rows = DB::table('contact')->orderBy('id', 'desc')->where('Is_active','Yes')->get();
           
            return DataTables()->of($rows)->addIndexColumn()
            ->addColumn('id', function($data){
                return $data->id;
            })
           ->addColumn('name', function($data){
                return $data->name;
            })

           ->addColumn('email', function($data){
                return $data->email;
            })

           ->addColumn('phone', function($data){
                return $data->phone;
            })

             ->addColumn('services', function($data){
                return $data->services;
            })

              ->addColumn('university', function($data){
                return $data->university;
            })

               ->addColumn('courses', function($data){
                return $data->courses;
            })    
             ->addColumn('message', function($data){
                return $data->message;
            })    
         
            ->addColumn('actions', function($data){
                $buttons = '<div class="ui" style="width: 100px;">';
                $buttons .= '<a href="javascript:void(0);" data-id="'.$data->id.'" class="btn btn-sm btn-danger delt_btn" data-toggle="tooltip" data-placement="top" title="Edit Detail" style="padding:.700rem .666rem;" ><i class="bx bx-trash"></i></a>';
               
                $buttons .= '</div>';
                return $buttons;
            })
            
            ->rawColumns(['id', 'name','email','phone','services','university','courses','message','actions'])
            // ->rawColumns(['id', 'name', 'owner', 'address', 'contact','Is_active'])
            ->make(true);
        }
    }

      public function enqiry_data_delete(Request $request)
    {
        $id = $request->id;

         $data = [
                                'Is_active' => "No",
                            ];

       
       $query =  DB::table('contact')->where('id', $id)->update($data);

           
        if ($query>0)
        {
            return response()->json(['error'=> false, 'message' => 'Details Delete successfully !']);
            
        }
        else
        {
            return response()->json(['error'=> true, 'message' => 'Something went wrong !',]);
        }
    }

   


}
