<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Datatable;
use Validator;

class CourseController extends Controller
{
    
    public function course_index()
    {
        return view('courses/index');
    }

    public function course_add()
    {
         $data['institute'] = DB::table('institute_list')->where('Is_active', 'Yes')->orderBy('ins_name', 'ASC')->get(); 
         $data['special'] = DB::table('specialization')->where('Is_active', 'Yes')->orderBy('spname', 'ASC')->get();
        return view('courses/add')->with($data);
    }

    public function upload_course_list(Request $request)
    {
        
        $validation = Validator::make($request->all(), [
            'courses_name' => 'required',
            'courses_duration' => 'required',
            'course_type' => 'required',
            'course_level' => 'required',
            'tuition_fee' => 'required',
            'cost_live' => 'required',
            'application_fee' => 'required',
            'intakes' => 'required',
            'special' => 'required',
     ]);

      if ($validation->fails()) {
            return response()->json(['error'=> true, 'message' => $validation->errors()->first()]);
        }

     
            


                  $data = [
                                'course' => $request->courses_name,
                                'duration' => $request->courses_duration,
                                'c_type' => $request->course_type,
                                'c_level' => $request->course_level,
                                'tuition_fee' => $request->tuition_fee,
                                'live_cost' => $request->cost_live,
                                'application_fee' => $request->application_fee,
                                'intakes' => $request->intakes,
                                'specialization' => $request->special,
                            ];


      $insert = DB::table('courses')->insert($data);



       if ($insert == true) {
         
            return response()->json(['error'=> false, 'message' =>'Data Added Successfully!']);
        }
        return response()->json(['error'=> true, 'message' => 'Somthing went Wrong, Please Try Again']);

  
    }


       public function data_course_list(Request $request)
    {
        if($request->ajax()){
            $rows = DB::table('courses')->orderBy('id', 'desc')->get();
           
            return DataTables()->of($rows)->addIndexColumn()
            ->addColumn('id', function($data){
                return $data->id;
            })
           ->addColumn('course', function($data){
                return $data->course;
            })
           ->addColumn('c_type', function($data){
                return $data->c_type;
            })
           ->addColumn('c_level', function($data){
                return $data->c_level;
            })
           ->addColumn('tuition_fee', function($data){
                return $data->tuition_fee;
            })
           ->addColumn('live_cost', function($data){
                return $data->live_cost;
            })
           ->addColumn('application_fee', function($data){
                return $data->application_fee;
            })
            ->addColumn('intakes', function($data){
                // $country = ',';
                if (isset($data->intakes)) {
                    $intakes = DB::table('institute_list')->where('id', $data->intakes)->value('ins_name');
                }
                return $intakes;
            })

           
           ->addColumn('duration', function($data){
                return $data->duration;
            })
           ->addColumn('c_type', function($data){
                return $data->c_type;
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
                $buttons .= '<a href="'.url('').'/admin/edit-course-list/'.$data->id.'" class="btn btn-sm btn-primary edit_btn" data-toggle="tooltip" data-placement="top" title="Edit Detail" style="padding:.700rem .666rem;" ><i class="bx bx-edit"></i></a>';
                if($data->Is_active=="Yes")
                    {
                        $buttons .= ' <a href="javascript:void(0);" data-id="'.$data->id.'" class="btn btn-sm btn-danger deactivate-course-btn" data-toggle="tooltip" data-placement="top" title="Block Detail" style="padding:.700rem .666rem;" ><i class="bx bx-block"></i></a>';
                    }
                    else
                    {
                        $buttons .= ' <a href="javascript:void(0);" data-id="'.$data->id.'" class="btn btn-sm btn-success activate-course-btn" data-toggle="tooltip" data-placement="top" title="Activate Detail" style="padding:.700rem .666rem;" ><i class="bx bx-check"></i></a>';
                    }
                $buttons .= '</div>';
                return $buttons;
            })
            
            ->rawColumns(['id', 'course','duration','c_type','c_level','tuition_fee','live_cost','application_fee','intakes','Is_active', 'actions'])
            // ->rawColumns(['id', 'name', 'owner', 'address', 'contact','Is_active'])
            ->make(true);
        }
    }

    public function edit_course_list(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'courses_name' => 'required',
            'courses_duration' => 'required',
            'course_type' => 'required',
            'course_level' => 'required',
            'tuition_fee' => 'required',
            'cost_live' => 'required',
            'application_fee' => 'required',
            'intakes' => 'required'
     ]);

      if ($validation->fails()) {
            return response()->json(['error'=> true, 'message' => $validation->errors()->first()]);
        }

          $id = $request->id;

                       $data = [
                                'course' => $request->courses_name,
                                'duration' => $request->courses_duration,
                                'c_type' => $request->course_type,
                                'c_level' => $request->course_level,
                                'tuition_fee' => $request->tuition_fee,
                                'live_cost' => $request->cost_live,
                                'application_fee' => $request->application_fee,
                                'intakes' => $request->intakes,
                                'specialization' => $request->special,
                            ];

                      

       $update =  DB::table('courses')->where('id', $id)->update($data);



       if ($update) {
         
            return response()->json(['error'=> false, 'message' =>'Data Updated Successfully!']);
        }
        return response()->json(['error'=> true, 'message' => 'Somthing went Wrong, Please Try Again']);

  
    }

     public function course_deactivate(Request $request)
    {
        $id = $request->id;


         $data = [
                    'Is_active' => "No",
                  ];

       
       $query =  DB::table('courses')->where('id', $id)->update($data);

       
    
       
        if ($query>0)
        {
            return response()->json(['error'=> false, 'message' => 'Details deactivated successfully !']);
            
        }
        else
        {
            return response()->json(['error'=> true, 'message' => 'Something went wrong !',]);
        }
    }

    public function course_activate(Request $request)
    {
        $id = $request->id;



         $data = [
                                'Is_active' => "Yes",
                            ];

       
       $query =  DB::table('courses')->where('id', $id)->update($data);

       
        if ($query>0)
        {
            return response()->json(['error'=> false, 'message' => 'Details Activated successfully !']);
            
        }
        else
        {
            return response()->json(['error'=> true, 'message' => 'Something went wrong !',]);
        }
    }

    public function course_edit(Request $request)
    {
        $id = $request->id;

        $data['institute'] = DB::table('institute_list')->where('Is_active', 'Yes')->orderBy('ins_name', 'ASC')->get();  
           $data['data'] = DB::table('courses as co')->leftJoin('institute_list as in', 'in.id', 'co.intakes')->where('co.id', $id)->select('co.*','co.id as iid','in.*')->first();

         $data['special'] = DB::table('specialization')->where('Is_active', 'Yes')->orderBy('spname', 'ASC')->get();
        return view('courses/edit')->with($data);
   
    }

   


}
