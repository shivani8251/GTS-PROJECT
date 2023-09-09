<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Datatable;
use Validator;

class IndexController extends Controller
{

    public function Home_index()
    {
        $courses = [];
        $data = DB::table('courses as c')->leftJoin('institute_list as il', 'il.id', 'c.intakes')->leftJoin('country as ct', 'ct.id', 'il.country_id')
        ->where('c.Is_active','Yes')->where('il.Is_active', 'Yes')
        ->select('c.course as course_name', 'il.ins_name', 'il.country_id', 'ct.name as country_name', 'il.ilogo as ins_logo', 'c.id as course_id', 'il.id as ins_id')->get()->groupBy('country_name');

        foreach($data as $key => $value){

            if(count($value) > 1){
                $temp = [];
                array_push($temp, $value[0]);
                array_push($temp, $value[1]);
                $courses[$key] = $temp; 
            }else{
                $courses[$key] = $value; 
            }
        }

        $data = [];

        $data['courses'] = $courses;
        $data['country'] = DB::table('country')->where('Is_active', 'Yes')->orderBy('name', 'ASC')->get();

         $data['university'] = DB::table('institute_list')->where('Is_active', 'Yes')->orderBy('rank', 'ASC')->get();

         $data['cours'] = DB::table('courses')->where('Is_active', 'Yes')->get();
           
        return view('user/index')->with($data);
    }

    

    public function study_abroad()
    {
     $data['university'] = DB::table('institute_list')->where('Is_active', 'Yes')->orderBy('rank', 'ASC')->get()->take(10);
        $data['cours'] = DB::table('courses')->where('Is_active', 'Yes')->get()->take(10);
        return view('user/study_abroad')->with($data);
    }

         public function About()
    {
        return view('user/about_us_3');
    }

    public function Students()
    {
        return view('user/students');
    }
    public function recruitment()
    {
        $data['cours'] = DB::table('courses')->where('Is_active', 'Yes')->get();
        $data['university'] = DB::table('institute_list')->where('Is_active', 'Yes')->orderBy('rank', 'ASC')->get();
        $data['country'] = DB::table('country')->where('Is_active', 'Yes')->orderBy('name', 'ASC')->get();
        return view('user/recruitment', $data);
    }

     public function Price_table()
    {
         $data['category'] = DB::table('course_category')->where('Is_active', 'Yes')->orderBy('position', 'ASC')->get();
         $data['coching'] = DB::table('coching_list')->where('Is_active', 'Yes')->get();
         $data['highlight'] = DB::table('course_highlight')->where('Is_active', 'Yes')->get();
        return view('user/pricing_table_2')->with($data);
    }

     public function contact() 
    {
        return view('user/contact_us_3');
    }

    public function blog(Request $request)
    {
        $id = $request->id;
        
         $data['coching'] = DB::table('coching_list')->where('Is_active', 'Yes')->where('id', $id)->first();

         $cid = $data['coching']->category_id;

         $hid = $data['coching']->highlight_id;

         

         $data['highlight'] = DB::table('course_highlight')->whereIn('id', explode(",", $hid))->get();


         $data['chapter'] = DB::table('chapter')->where('Is_active', 'Yes')->where('coching_id', $id)->get();

         $data['topic'] = DB::table('topics')->where('Is_active', 'Yes')->where('coching_list_id', $id)->get();



        $data['coch_list'] = DB::table('coching_list')->where('Is_active', 'Yes')->where('category_id', $cid)->orderBy('cooching_name', 'ASC')->get();



          
          
        return view('user/blog_details_2')->with($data);
    }

      

       public function country_name()
    {            

      $data = DB::table('country')->where("is_active", "Yes")->get();
          
        return response()->json($data);
    }
    

    public function join_form(Request $request)
    {
       
     //    $validation = Validator::make($request->all(), [
     //        'country_name' => 'required',
     //  'flag' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
     // ]);

     //  if ($validation->fails()) {
     //        return response()->json(['error'=> true, 'message' => $validation->errors()->first()]);
     //    }

     

                  $data = [
                                'student_name' => $request->student_name,
                                'email' => $request->email,
                                'phone' => $request->phone,
                                'applying_classes' => $request->classes,
                                'amount' => $request->amount,
                                'message' => $request->message,
                            ];




      $insert = DB::table('join_students')->insert($data);



       if ($insert == true) {
         
            return response()->json(['error'=> false, 'message' =>'Message sent Successfully!']);
        }
        return response()->json(['error'=> true, 'message' => 'Somthing went Wrong, Please Try Again']);

  
    }

     public function contact_form(Request $request)
    {
      
     //    $validation = Validator::make($request->all(), [
     //        'country_name' => 'required',
     //  'flag' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
     // ]);

     //  if ($validation->fails()) {
     //        return response()->json(['error'=> true, 'message' => $validation->errors()->first()]);
     //    }

     

                  $data = [
                                'name' => $request->name,
                                'email' => $request->email,
                                'phone' => $request->phone,
                                'services' => $request->services,
                                'message' => $request->message,
                                'university' => $request->uname,
                                'courses' => $request->cname,
                            ];




      $insert = DB::table('contact')->insert($data);



       if ($insert == true) {
         
            return response()->json(['error'=> false, 'message' =>'Message sent Successfully!']);
        }
        return response()->json(['error'=> true, 'message' => 'Somthing went Wrong, Please Try Again']);

  
    }

   

    public function universities_search(Request $request)
    {

         $dump['country'] = DB::table('country')->where('Is_active', 'Yes')->orderBy('name', 'ASC')->get();
       
    
        $currentPage = request('page') ? request('page') : 1;

        $specialisation = $request->specialisation;

        $filter_by = $request->filter_by;

        $u_name = $request->univercity_name;

        $sortby = $request->sortby;


         $country = (!empty($request->country)) ? (explode(",", str_replace(' ', '', $request->country))) : $request->country ;


        $table = DB::table('country as c');
        $table->join('institute_list as i', 'i.country_id', '=', 'c.id', 'left');
        $table->join('courses as t', 't.intakes', '=', 'i.id', 'left');
        $table->select("c.*", "i.ins_name","i.country_id","i.rank","i.ug_pg_fee","i.ug_fee_type","i.cost_live","i.cost_type","i.accommodation","i.type_institute","i.found_year","i.ilogo","t.course","t.duration","t.tuition_fee","c.name as country_name",  "c.name as cours_name");
        $table->where("c.Is_active", "Yes");
        $table->where("i.Is_active", "Yes"); 

        $ins_count = DB::table('institute_list')->where("Is_active", "Yes")->get()->count();

        $course_count = DB::table('courses')->where("Is_active", "Yes")->get()->count();



        if($country)
        {        
           
            $table->whereIn("c.id", $country);
        }
        if($specialisation)
        {
            $table->where("i.accommodation", $specialisation);   
        }

        if($filter_by)
        {
            $table->where("i.type_institute", $filter_by);   
        }

        if($u_name)
        {
            $table->where("i.ins_name", $u_name);   
        }

        if($sortby == "Rank_High_to_low")
        {
               $table->orderBy("i.rank", "ASC");
        }
        if($sortby == "Tuition_Fee_Low_to_High"){
            $table->orderBy("t.tuition_fee", "ASC");
        }
        if($sortby == "Tuition_Fee_High_to_Low"){
            $table->orderBy("t.tuition_fee", "DESC");
        }



        $table->orderBy("c.id", "DESC");

        $job_pre_page = 9;
        $dataCount = $table->count();
        $total_page = intval(ceil($dataCount/$job_pre_page));
        $skip = ((intval($currentPage)-1)*$job_pre_page);
        $limit = $job_pre_page;

        $univercity = $table->skip($skip)->take($limit)->get();

        // dd($univercity);

        $dump["univercity"] = $univercity;
        $dump["url_id"] = $country;

        $dump["ins_count"] = $ins_count;
        $dump["course_count"] = $course_count;


        // $dump["projects"] = $univercity;
        $dump["total_page"] = $total_page;
        $dump["current_page"] = $currentPage;


        return view('user/universities_search')->with($dump);
    }

    public function course_search(Request $request){

        // $array1 = [1, 2, 3];
        // $array2 = [4, 5, 6];
          
        // dd(array_merge($array1, $array2));
            }


    public function courses(Request $request)
    {

    $course_uni_search = $request->query('course_uni_search');

         if($course_uni_search !=""){

            $course_data = [];
            $course =  DB::table('courses as c')->leftJoin('institute_list as il','il.id','c.intakes')->where('c.course', 'LIKE', "%{$course_uni_search}%")->where('c.Is_active', 'Yes')->where('il.Is_active', 'Yes')->select('c.id as course_id','c.course','c.intakes','c.duration','c.c_type','il.*')->get();

            foreach ($course as $key => $value) {
                $value->tag_cour = 'course';
                array_push($course_data,$value);
            }
            ;
               $institute_data = [];   
          $institute_list =  DB::table('institute_list as il')->leftJoin('country as c','c.id','il.country_id')->where('il.ins_name','LIKE', "%{$course_uni_search}%")->where('Is_active', 'Yes')->select('institute_list.*','c.name')->get();
          foreach($institute_list as $institute_list_value){
            $institute_list_value->tag_ins = 'institute';
                  array_push($institute_data,$institute_list_value);
           
           
          }
           // dd(array_merge($course_data, $institute_data));

               $course_uni_search = array_merge($course_data, $institute_data);
          
                
     }
       $dump['course_uni_search_data']  = $course_uni_search;


      $dump['institute_list'] = DB::table('institute_list')->where('Is_active', 'Yes')->orderBy('ins_name', 'ASC')->get();       
    
        $currentPage = request('page') ? request('page') : 1;

         $u_name = $request->univercity_name;

         $filter_by = $request->filter_by;  

         $interest = $request->interest;

          $special = $request->specialization;

          $sortby = $request->sortby;


          $Course = (!empty($request->Course)) ? (explode(",", str_replace(' ', '', $request->Course))) : $request->Course ;



        $table = DB::table('institute_list as I');
        $table->join('country as C', 'C.id', '=', 'I.country_id', 'left');
        $table->join('courses as E', 'E.intakes', '=', 'I.id', 'left');
        $table->select("I.*","E.id","E.course", "C.name","C.flag","I.id as Iid");
        $table->where("I.Is_active", "Yes");
        $table->where("C.Is_active", "Yes");

        $ins_count = DB::table('institute_list')->where("Is_active", "Yes")->get()->count();

        $course_count = DB::table('courses')->where("Is_active", "Yes")->get()->count();

       
        if($u_name)
        {
            $table->where("I.ins_name", $u_name);   
        }

         if($filter_by)
        {
            $table->where("I.type_institute", $filter_by);   
        }

         if($interest)
        {
            $table->where("E.c_level", $interest);   
        }

        if($special)
        {
            $table->where("E.specialization", $special);   
        }

        if($Course)
        {        
           
            $table->whereIn("E.id", $Course);
        }   

        if($sortby == "Rank_High_to_low")
        {
               $table->orderBy("I.rank", "ASC");
        }
        if($sortby == "Tuition_Fee_Low_to_High"){
            $table->orderBy("C.tuition_fee", "ASC");
        }
        if($sortby == "Tuition_Fee_High_to_Low"){
            $table->orderBy("C.tuition_fee", "DESC");
        }   


        
        $table->orderBy("I.id", "DESC");

        $job_pre_page = 9;
        $dataCount = $table->count();
        $total_page = intval(ceil($dataCount/$job_pre_page));
        $skip = ((intval($currentPage)-1)*$job_pre_page);
        $limit = $job_pre_page;

        $ins_list = $table->skip($skip)->take($limit)->get();



        $dump["ins_list"] = $ins_list;

       
        $data["table"] = $table;

         $dump["ins_count"] = $ins_count;
        $dump["course_count"] = $course_count;


      $dump["course"] =  DB::table('courses')->where('Is_active', 'Yes')->orderBy('course', 'ASC')->get();
      $dump["special"] =  DB::table('specialization')->where('Is_active', 'Yes')->orderBy('spname', 'ASC')->get();

       // $dump["projects"] = $univercity;
        $dump["total_page"] = $total_page;
        $dump["current_page"] = $currentPage;


        return view('user/course_search')->with($dump);
    }


   

   


}
