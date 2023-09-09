<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Datatable;
use Validator;

class CategoryCochController extends Controller
{
     public function CategoryCourse()
    {
        return view('coching/category');
    }


    public function add_course_cat(Request $request)
    {
     

        $validation = Validator::make($request->all(), [
            'course_category' => 'required',
            'category_position' => 'required',
     ]);

      if ($validation->fails()) {
            return response()->json(['error'=> true, 'message' => $validation->errors()->first()]);
        }

     

                  $data = [
                                'course_category_name' => $request->course_category,
                                'position' => $request->category_position,
                            ];


      $insert = DB::table('course_category')->insert($data);



       if ($insert == true) {
         
            return response()->json(['error'=> false, 'message' =>'Data Added Successfully!']);
        }
        return response()->json(['error'=> true, 'message' => 'Somthing went Wrong, Please Try Again']);

  
    }

     public function Category_data(Request $request)
    {
        if($request->ajax()){
            $rows = DB::table('course_category')->orderBy('id', 'desc')->get();
           
            return DataTables()->of($rows)->addIndexColumn()
            ->addColumn('id', function($data){
                return $data->id;
            })
           ->addColumn('course_category_name', function($data){
                return $data->course_category_name;
            })
           ->addColumn('position', function($data){
                return $data->position;
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
            
            ->rawColumns(['id', 'course_category_name', 'position','Is_active', 'actions'])
            // ->rawColumns(['id', 'name', 'owner', 'address', 'contact','Is_active'])
            ->make(true);
        }
    }

    public function course_cat_deactivate(Request $request)
    {
        $id = $request->id;

         $data = [
                                'Is_active' => "No",
                            ];

       
       $query =  DB::table('course_category')->where('id', $id)->update($data);

       
    
       
        if ($query>0)
        {
            return response()->json(['error'=> false, 'message' => 'Details deactivated successfully !']);
            
        }
        else
        {
            return response()->json(['error'=> true, 'message' => 'Something went wrong !',]);
        }
    }

    public function course_cat_activate(Request $request)
    {
        $id = $request->id;

         $data = [
                                'Is_active' => "Yes",
                            ];

       
       $query =  DB::table('course_category')->where('id', $id)->update($data);

       
    
       
        if ($query>0)
        {
            return response()->json(['error'=> false, 'message' => 'Details activated successfully !']);
            
        }
        else
        {
            return response()->json(['error'=> true, 'message' => 'Something went wrong !',]);
        }
    }

    public function get_cat_data(Request $request)
    {
       
            $id = $request->id;
           
            
            $rows = DB::table('course_category')->where('id', $id)->first();
           
          

            return response()->json($rows);
        
    }

     public function upload_edit_category(Request $request)
    {
      
       
        $validation = Validator::make($request->all(), [
            'category_course' => 'required',
            'position_category' => 'required',
     ]);

      if ($validation->fails()) {
            return response()->json(['error'=> true, 'message' => $validation->errors()->first()]);
        }

        $id = $request->id;

     
                         $data = [
                                'course_category_name' => $request->category_course,
                                'position' => $request->position_category,
                            ];


      $update =  DB::table('course_category')->where('id', $id)->update($data);

       if ($update == true) {
         
            return response()->json(['error'=> false, 'message' =>'Data Updated Successfully!']);
        }
        return response()->json(['error'=> true, 'message' => 'Somthing went Wrong, Please Try Again']);

  
    }

     public function Course_highlight()
    {
        return view('coching/highlight');
    }

    public function upload_highlight(Request $request)
    {


        $validation = Validator::make($request->all(), [
            'course_highlight' => 'required',
            'highlight_position' => 'required',
      'highlight_icon' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
     ]);

      if ($validation->fails()) {
            return response()->json(['error'=> true, 'message' => $validation->errors()->first()]);
        }

     
        $course_highlight = $request->course_highlight;


        
      $image = $request->file('highlight_icon');

      $im = rand(1000, 9999);

      $new_name = $course_highlight.'_'.$im.'.' . $image->getClientOriginalExtension();

      // $file = $request->file->storeAs('public/upload/flag', $new_name);



      $image->move(public_path('public/upload/Highlight'), $new_name);

                  $data = [
                                'highlight_name' => $course_highlight,
                                'posiotion' => $request->highlight_position,
                                'icon' => $new_name,
                            ];


      $insert = DB::table('course_highlight')->insert($data);


       if ($insert == true) {
         
            return response()->json(['error'=> false, 'message' =>'Data Added Successfully!']);
        }
        return response()->json(['error'=> true, 'message' => 'Somthing went Wrong, Please Try Again']);

  
    }

       public function highlight_data(Request $request)
    {
        if($request->ajax()){
            $rows = DB::table('course_highlight')->orderBy('id', 'desc')->get();
           
            return DataTables()->of($rows)->addIndexColumn()
            ->addColumn('id', function($data){
                return $data->id;
            })
           ->addColumn('highlight_name', function($data){
                return $data->highlight_name;
            })
           ->addColumn('icon', function($data){
                // $flag = '-';
                if(isset($data->icon))
                {
                    $path = asset('public/public/upload/Highlight/'.$data->icon);
                    $icon = '<a href="'.$path.'" target="_BLANK"><img src="'.$path.'" height="auto" width="50" /></a>';
                }
                return $icon;
                })
            ->addColumn('posiotion', function($data){
                return $data->posiotion;
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
            
            ->rawColumns(['id', 'highlight_name' ,'icon','posiotion','Is_active', 'actions'])
            // ->rawColumns(['id', 'name', 'owner', 'address', 'contact','Is_active'])
            ->make(true);
        }
    }

      public function highlight_deactivate(Request $request)
    {
        $id = $request->id;

         $data = [
                                'Is_active' => "No",
                            ];

       
       $query =  DB::table('course_highlight')->where('id', $id)->update($data);

       
    
       
        if ($query>0)
        {
            return response()->json(['error'=> false, 'message' => 'Details deactivated successfully !']);
            
        }
        else
        {
            return response()->json(['error'=> true, 'message' => 'Something went wrong !',]);
        }
    }

    public function highlight_activate(Request $request)
    {
        $id = $request->id;

         $data = [
                                'Is_active' => "Yes",
                            ];

       
       $query =  DB::table('course_highlight')->where('id', $id)->update($data);

       
    
       
        if ($query>0)
        {
            return response()->json(['error'=> false, 'message' => 'Details activated successfully !']);
            
        }
        else
        {
            return response()->json(['error'=> true, 'message' => 'Something went wrong !',]);
        }
    }

    public function get_highlight_data(Request $request)
    {
       
            $id = $request->id;
           
            
            $rows = DB::table('course_highlight')->where('id', $id)->first();
       
          

            return response()->json($rows);
        
    }

    public function upload_edit_highlight(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'highlight' => 'required',
            'pos_hight' => 'required',
      'icon_highlight' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
     ]);

      if ($validation->fails()) {
            return response()->json(['error'=> true, 'message' => $validation->errors()->first()]);
        }

     
        $highlight = $request->highlight;

      
        
      $image = $request->file('icon_highlight');

      $im = rand(1000, 9999);

      $new_name = $highlight.'_'.$im.'.' . $image->getClientOriginalExtension();

      // $file = $request->file->storeAs('public/upload/flag', $new_name);



      $image->move(public_path('public/upload/Highlight'), $new_name);

                  $data = [
                                'highlight_name' => $highlight,
                                'posiotion' => $request->pos_hight,
                                'icon' => $new_name,
                            ];

          $id = $request->id;

      $update =  DB::table('course_highlight')->where('id', $id)->update($data);

       if ($update == true) {
         
            return response()->json(['error'=> false, 'message' =>'Data Updated Successfully!']);
        }
        return response()->json(['error'=> true, 'message' => 'Somthing went Wrong, Please Try Again']);

  
    }

   



}
