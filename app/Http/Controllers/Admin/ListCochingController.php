<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Datatable;
use Validator;

class ListCochingController extends Controller
{
    public function List_coching()
    {
        return view('listcoching/index');
    }

    public function coching_add()
    {
         $data['category'] = DB::table('course_category')->where('Is_active', 'Yes')->orderBy('course_category_name', 'ASC')->get();
         $data['highlight'] = DB::table('course_highlight')->where('Is_active', 'Yes')->orderBy('highlight_name', 'ASC')->get();  
        return view('listcoching/add')->with($data);
    }

    public function coching_data_list(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'cooching_name' => 'required',
            'category' => 'required',
            'traning_practice' => 'required',
            'duration' => 'required',
            'taughtby' => 'required',
            'course_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'highlight' => 'required',
            'regular_price' => 'required',
            'sale_price' => 'required',
             'highlight' => 'required',
            'regular_price' => 'required',
            'sale_price' => 'required',
            'brochure' => 'required|mimes:doc,pdf,docx,zip|max:2048',
            'short_desc' => 'required'
     ]);

      if ($validation->fails()) {
            return response()->json(['error'=> true, 'message' => $validation->errors()->first()]);
        }

        $cooching_name = $request->cooching_name;


        $image = $request->file('course_img');


        if(!empty($image)){

            $image = $request->file('course_img');

            $im = rand(1000, 9999);

      $cooching_img = $cooching_name.'_'.$im.'.' . $image->getClientOriginalExtension();

    $image->move(public_path('public/upload/cooching_name'), $cooching_img);
   

        }

        $brochure = $request->file('brochure');

     
             if(!empty($brochure)){

                           
            $br = rand(1000, 9999);
            $cooching_broc = $cooching_name.'_'.$br.'.' . $brochure->getClientOriginalExtension();
           $brochure->move(public_path('public/upload/brochure'), $cooching_broc);
          
        }

        // $brochure = $request->file('brochure');


        $highlight_id = $request->highlight;
   

        $highlight =implode(",",$highlight_id);


                  $data = [
                                'cooching_name' => $cooching_name,
                                'category_id' => $request->category,
                                'traning_practice' => $request->traning_practice,
                                'classes' => $request->classes,
                                'duration' => $request->duration,
                                'taughtby' => $request->taughtby,
                                'course_img' => $cooching_img,
                                'highlight_id' => $highlight,
                                'regular_price' => $request->regular_price,
                                'sale_price' => $request->sale_price,
                                'brochure' => $cooching_broc,
                                'short_desc' => $request->short_desc,
                                'long_desc' => $request->long_desc,

                            ];
                          


      $insert = DB::table('coching_list')->insert($data);



       if ($insert == true) {
         
            return response()->json(['error'=> false, 'message' =>'Data Added Successfully!']);
        }
        return response()->json(['error'=> true, 'message' => 'Somthing went Wrong, Please Try Again']);

  
    }


      public function show_coching_data(Request $request)
    {
        if($request->ajax()){
            $rows = DB::table('coching_list')->orderBy('id', 'desc')->get();
           
            return DataTables()->of($rows)->addIndexColumn()
            ->addColumn('id', function($data){
                return $data->id;
            })
           ->addColumn('cooching_name', function($data){
                return $data->cooching_name;
            })
           ->addColumn('category_id', function($data){
                // $country = ',';
                if (isset($data->category_id)) {
                    $category_id = DB::table('course_category')->where('id', $data->category_id)->value('course_category_name');
                }
                return $category_id;
            })

           ->addColumn('traning_practice', function($data){
                return $data->traning_practice;
            })
            ->addColumn('taughtby', function($data){
                return $data->taughtby;
            })
           ->addColumn('duration', function($data){
                return $data->duration;
            })
         
           ->addColumn('course_img', function($data){
                // $flag = '-';
                if(isset($data->course_img))
                {
                    $path = asset('public/public/upload/cooching_name/'.$data->course_img);
                    $course_img = '<a href="'.$path.'" target="_BLANK"><img src="'.$path.'" height="auto" width="50" /></a>';
                }
                return $course_img;
                }) 
           
             ->addColumn('highlight_id', function($data){
                // $country = ',';
                if (isset($data->highlight_id)) {
                    $highlight_id = DB::table('course_highlight')->where('id', $data->highlight_id)->value('highlight_name');
                }
                return $highlight_id;
            })
               ->addColumn('regular_price', function($data){
                return $data->regular_price;
            })
                 ->addColumn('sale_price', function($data){
                return $data->sale_price;
            })
                 ->addColumn('brochure', function($data){
                // $flag = '-';
                if(isset($data->brochure))
                {
                    $path = asset('public/public/upload/brochure/'.$data->brochure);
                   // $brochure = '<a href="'.$path.'"download="'.$data->brochure.'">Download</a>';
                   $brochure =  '<a href="'.$path.'" download="'.$data->brochure.'" class="btn btn-sm btn-primary " data-placement="top" style="padding:.700rem .666rem;"><i class="bx bx-download"></i></a>';
                }
                return $brochure;
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

              ->addColumn('outline', function($data){

                $C = DB::table('chapter')->where('Is_active', 'Yes')->where('coching_id', $data->id)->count();

                $T = DB::table('topics')->where('Is_active', 'Yes')->where('coching_list_id', $data->id)->count();


                $buttons = '<div class="ui" style="width: 100px;">';

                $buttons .= '<a href="'.url('').'/admin/add-course-outline-list/'.$data->id.'"><span class="badge badge-pill badge-success">'.$C.' Chapter <br> '.$T.' Topic</span></a>';

                return $buttons;


            })

            ->addColumn('actions', function($data){
                $buttons = '<div class="ui" style="width: 100px;">';


                $buttons .= '<a href="'.url('').'/admin/edit-coching-list/'.$data->id.'" class="btn btn-sm btn-primary edit_btn" data-toggle="tooltip" data-placement="top" title="Edit Detail" style="padding:.700rem .666rem;" ><i class="bx bx-edit"></i></a>';
                if($data->Is_active=="Yes")
                    {
                        $buttons .= ' <a href="javascript:void(0);" data-id="'.$data->id.'" class="btn btn-sm btn-danger deactivate-btn" data-toggle="tooltip" data-placement="top" title="Block Detail" style="padding:.700rem .666rem;" ><i class="bx bx-block"></i></a>';
                    }
                    else
                    {
                        $buttons .= ' <a href="javascript:void(0);" data-id="'.$data->id.'" class="btn btn-sm btn-success activate-btn" data-toggle="tooltip" data-placement="top" title="Activate Detail" style="padding:.700rem .666rem;" ><i class="bx bx-check"></i></a>';
                    }
                $buttons .= '</div>';
                return $buttons;
            })
            
            ->rawColumns(['id', 'cooching_name','category_id','traning_practice','taughtby','duration','course_img','highlight_id','regular_price','sale_price','brochure','outline','Is_active', 'actions'])
            // ->rawColumns(['id', 'name', 'owner', 'address', 'contact','Is_active'])
            ->make(true);
        }
    }

     public function coching_list_deactivate(Request $request)
    {
        $id = $request->id;


         $data = [
                    'Is_active' => "No",
                  ];

       
       $query =  DB::table('coching_list')->where('id', $id)->update($data);

       
    
       
        if ($query>0)
        {
            return response()->json(['error'=> false, 'message' => 'Details deactivated successfully !']);
            
        }
        else
        {
            return response()->json(['error'=> true, 'message' => 'Something went wrong !',]);
        }
    }

    public function coching_list_activate(Request $request)
    {
        $id = $request->id;



         $data = [
                                'Is_active' => "Yes",
                            ];

       
       $query =  DB::table('coching_list')->where('id', $id)->update($data);

       
        if ($query>0)
        {
            return response()->json(['error'=> false, 'message' => 'Details Activated successfully !']);
            
        }
        else
        {
            return response()->json(['error'=> true, 'message' => 'Something went wrong !',]);
        }
    }

    public function list_coching_edit(Request $request)
    {
        $id = $request->id;

        $data['category'] = DB::table('course_category')->where('Is_active', 'Yes')->orderBy('course_category_name', 'ASC')->get();
         $data['highlight'] = DB::table('course_highlight')->where('Is_active', 'Yes')->orderBy('highlight_name', 'ASC')->get(); 
         $data['data'] = DB::table('coching_list as col')->leftJoin('course_category as cc', 'cc.id', 'col.category_id')->leftJoin('course_highlight as ch','ch.id','col.highlight_id')->where('col.id', $id)->select('col.*','col.id as iid','cc.*','ch.*')->first(); 

        return view('listcoching/edit')->with($data);

   
    }

     public function coching_data_edit_list(Request $request)
    {


        $validation = Validator::make($request->all(), [
            'cooching_name' => 'required',
            'category' => 'required',
            'traning_practice' => 'required',
            'duration' => 'required',
            'taughtby' => 'required',
             'course_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
              'highlight' => 'required',
            'regular_price' => 'required',
            'sale_price' => 'required',
             'highlight' => 'required',
            'regular_price' => 'required',
            'sale_price' => 'required',
            'brochure' => 'required|mimes:doc,pdf,docx,zip|max:2048',
     ]);

      if ($validation->fails()) {
            return response()->json(['error'=> true, 'message' => $validation->errors()->first()]);
        }

        $cooching_name = $request->cooching_name;


        $image = $request->file('course_img');


        if(!empty($image)){

            $image = $request->file('course_img');

            $im = rand(1000, 9999);

      $cooching_img = $cooching_name.'_'.$im.'.' . $image->getClientOriginalExtension();

    $image->move(public_path('public/upload/cooching_name'), $cooching_img);
   

        }

        $brochure = $request->file('brochure');

     
             if(!empty($brochure)){

                           
            $br = rand(1000, 9999);
            $cooching_broc = $cooching_name.'_'.$br.'.' . $brochure->getClientOriginalExtension();
           $brochure->move(public_path('public/upload/brochure'), $cooching_broc);
          
        }

        // $brochure = $request->file('brochure');


        $highlight_id = $request->highlight;
   

        $highlight =implode(",",$highlight_id);

        $id = $request->id;


                  $data = [
                                'cooching_name' => $cooching_name,
                                'category_id' => $request->category,
                                'traning_practice' => $request->traning_practice,
                                'duration' => $request->duration,
                                'taughtby' => $request->taughtby,
                                'course_img' => $cooching_img,
                                'highlight_id' => $highlight,
                                'regular_price' => $request->regular_price,
                                'sale_price' => $request->sale_price,
                                'brochure' => $cooching_broc,
                                'short_desc' => $request->short_desc,
                                'long_desc' => $request->long_desc,
                            ];
                          


      $update =  DB::table('coching_list')->where('id', $id)->update($data);



       if ($update == true) {
         
            return response()->json(['error'=> false, 'message' =>'Data Updated Successfully!']);
        }
        return response()->json(['error'=> true, 'message' => 'Somthing went Wrong, Please Try Again']);

  
    }

     public function list_course_outline(Request $request)
    {
        $id = $request->id;

         // $data['chapter'] = DB::table('chapter as c')->leftJoin('topics as t', 't.cid', 'c.id')->where('c.choching_id', $id)->select('t.*','c.*')->get();


     

        $data['chapter'] = DB::table('chapter')->where('coching_id', $id)->where('Is_active', 'Yes')->orderBy('Chapter_name', 'ASC')->get();

       foreach ($data['chapter'] as $c){ 
                   $tid = $c->id;
                    }

     if(!empty($tid))
     {
        $data['topics'] = DB::table('topics')->where('Is_active', 'Yes')->get();

         $data['data'] = DB::table('coching_list as col')->where('col.id', $id)->select('col.*','col.id as iid')->first(); 
        return view('listcoching/outline')->with($data);
     }
     else
     {

          $data['data'] = DB::table('coching_list as col')->where('col.id', $id)->select('col.*','col.id as iid')->first(); 
        return view('listcoching/outline')->with($data);

         

     }

       

   
    }

     public function outline_add(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'chapter_name' => 'required',
     ]);

      if ($validation->fails()) {
            return response()->json(['error'=> true, 'message' => $validation->errors()->first()]);
        }

     $id = $request->id;

              $data = [
                                'coching_id' =>$id,
                                'chapter_name' => $request->chapter_name,
                            ];


      $insert = DB::table('chapter')->insert($data);


       if ($insert == true) {
         
            return response()->json(['error'=> false, 'message' =>'Data Added Successfully!']);
        }
        return response()->json(['error'=> true, 'message' => 'Somthing went Wrong, Please Try Again']);

  
    }

    public function outline_add_topic(Request $request)
    {


        $validation = Validator::make($request->all(), [
            'topic_name' => 'required',
            'chapter' => 'required',
     ]);

      if ($validation->fails()) {
            return response()->json(['error'=> true, 'message' => $validation->errors()->first()]);
        }

     $id = $request->id;

              $data = [
                                'coching_list_id' =>$id,
                                'chepter_id' => $request->chapter,
                                'topic_name' => $request->topic_name,
                            ];


      $insert = DB::table('topics')->insert($data);


       if ($insert == true) {
         
            return response()->json(['error'=> false, 'message' =>'Data Added Successfully!']);
        }
        return response()->json(['error'=> true, 'message' => 'Somthing went Wrong, Please Try Again']);

  
    }


}
