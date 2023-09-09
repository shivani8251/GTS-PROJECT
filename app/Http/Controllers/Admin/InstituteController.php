<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Datatable;
use Validator;

class InstituteController extends Controller
{
    public function list_index(Request $request)
    {
        $data['ins_name'] = isset($request->ins_name) ? $request->ins_name : 'All' ;
        return view('institute/index', $data);
    }

    public function list_add()
    {
         $data['country'] = DB::table('country')->where('Is_active', 'Yes')->orderBy('name', 'ASC')->get();  
        return view('institute/add')->with($data);
    }


        public function data_list(Request $request)
    {
        if($request->ajax()){

            $rows = DB::table('institute_list');

            if($request->ins_name && $request->ins_name !== 'All')
            {
                $rows->where('ins_name', $request->ins_name);
            }


            $rows = $rows->orderBy('id', 'desc')->get();
                        
            return DataTables()->of($rows)->addIndexColumn()
            ->addColumn('id', function($data){
                return $data->id;
            })
           ->addColumn('ins_name', function($data){
                return $data->ins_name;
            })
            ->addColumn('ilogo', function($data){
                // $flag = '-';
                if(isset($data->ilogo))
                {
                    $path = asset('public/public/upload/ins_list/'.$data->ilogo);
                    $flag = '<a href="'.$path.'" target="_BLANK"><img src="'.$path.'" height="auto" width="50" /></a>';
                }
                return $flag;
                })


             ->addColumn('country_id', function($data){

                $counties = DB::table('country')->whereIn('id', explode(',', $data->country_id))->pluck('name');

                $country_name = '';

                if (count($counties)) 
                {
                    
                    for ($i=0; $i < count($counties); $i++) { 
                        
                        $country_name .= $counties[$i];

                        if ($i < (count($counties)-1)) {
                            $country_name .= ', ';
                        }
                    }
                                    
                }
                return $country_name;
            })


            // ->addColumn('country_id', function($data){
            //     // $country = ',';
            //     if (isset($data->country_id)) 
            //     {
            //         $country_id = DB::table('country')->where('id', $data->country_id)->value('name');


                                    
            //     }
            //     return $country_id;
            // })


           // ->addColumn('country_id', function($data){
           //      return $data->country_id;
           //  })
           ->addColumn('rank', function($data){
                return $data->rank;
            })
           ->addColumn('ug_pg_fee', function($data){
                return $data->ug_pg_fee;
            })
           ->addColumn('ug_fee_type', function($data){
                return $data->ug_fee_type;
            })
           ->addColumn('cost_live', function($data){
                return $data->cost_live;
            })
           ->addColumn('cost_type', function($data){
                return $data->cost_type;
            })
           ->addColumn('accommodation', function($data){
                return $data->accommodation;
            })
            ->addColumn('type_institute', function($data){
                return $data->type_institute;
            })
           ->addColumn('found_year', function($data){
                return $data->found_year;
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
                $buttons .= '<a href="'.url('').'/admin/edit-ins-list/'.$data->id.'" class="btn btn-sm btn-primary edit_btn" data-toggle="tooltip" data-placement="top" title="Edit Detail" style="padding:.700rem .666rem;" ><i class="bx bx-edit"></i></a>';
                if($data->Is_active=="Yes")
                    {
                        $buttons .= ' <a href="javascript:void(0);" data-id="'.$data->id.'" class="btn btn-sm btn-danger deactivate-list-btn" data-toggle="tooltip" data-placement="top" title="Block Detail" style="padding:.700rem .666rem;" ><i class="bx bx-block"></i></a>';
                    }
                    else
                    {
                        $buttons .= ' <a href="javascript:void(0);" data-id="'.$data->id.'" class="btn btn-sm btn-success activate-list-btn" data-toggle="tooltip" data-placement="top" title="Activate Detail" style="padding:.700rem .666rem;" ><i class="bx bx-check"></i></a>';
                    }
                $buttons .= '</div>';
                return $buttons;
            })
            
            ->rawColumns(['id', 'ins_name', 'ilogo','country_id','rank','ug_pg_fee','ug_fee_type','cost_live','cost_type','accommodation','type_institute','found_year','Is_active', 'actions'])
            // ->rawColumns(['id', 'name', 'owner', 'address', 'contact','Is_active'])
            ->make(true);
        }
    }

    public function list_edit(Request $request)
    {
        $id = $request->id;

        $data['country'] = DB::table('country')->where('Is_active', 'Yes')->orderBy('name', 'ASC')->get();  
           $data['data'] = DB::table('institute_list as inl')->leftJoin('country as co', 'co.id', 'inl.country_id')->where('inl.id', $id)->select('inl.*','inl.id as iid','co.*')->first();

        return view('institute/edit')->with($data);
   
    }

      
    public function upload_ins_list(Request $request)
    {
      
        $validation = Validator::make($request->all(), [
            'Institute_name' => 'required',
            'country_name' => 'required',
            'rank' => 'required',
            'ug_pg_fee' => 'required',
            'ug_fee_type' => 'required',
            'cost_live' => 'required',
            'cost_type' => 'required',
            'accommodation' => 'required',
            'type_institute' => 'required',
            'found_year' => 'required',
            'ilogo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
     ]);

      if ($validation->fails()) {
            return response()->json(['error'=> true, 'message' => $validation->errors()->first()]);
        }

     
        $ins_name = $request->Institute_name;

        $country_id= $request->country_name;

        $country_name=implode(",",$country_id);


        
      $image = $request->file('ilogo');

      $im = rand(1000, 9999);

      $new_name = $ins_name.'_'.$im.'.' . $image->getClientOriginalExtension();

      // $file = $request->file->storeAs('public/upload/flag', $new_name);



      $image->move(public_path('public/upload/ins_list'), $new_name);

                  $data = [
                                'ins_name' => $ins_name,
                                'country_id' => $country_name,
                                'rank' => $request->rank,
                                'ug_pg_fee' => $request->ug_pg_fee,
                                'ug_fee_type' => $request->ug_fee_type,
                                'cost_live' => $request->cost_live,
                                'cost_type' => $request->cost_type,
                                'accommodation' => $request->accommodation,
                                'type_institute' => $request->type_institute,
                                'found_year' => $request->found_year,
                                'ilogo' => $new_name,
                            ];


      $insert = DB::table('institute_list')->insert($data);



       if ($insert == true) {
         
            return response()->json(['error'=> false, 'message' =>'Data Added Successfully!']);
        }
        return response()->json(['error'=> true, 'message' => 'Somthing went Wrong, Please Try Again']);

  
    }

    public function update_ins_list(Request $request)
    {
       
        $validation = Validator::make($request->all(), [
            'Institute_name' => 'required',
            'country_name' => 'required',
            'rank' => 'required',
            'ug_pg_fee' => 'required',
            'ug_fee_type' => 'required',
            'cost_live' => 'required',
            'cost_type' => 'required',
            'accommodation' => 'required',
            'type_institute' => 'required',
            'found_year' => 'required',
            'ilogo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
     ]);

      if ($validation->fails()) {
            return response()->json(['error'=> true, 'message' => $validation->errors()->first()]);
        }

     
        $ins_name = $request->Institute_name;

        $country_id= $request->country_name;

    $country_name=implode(",",$country_id);
        
      $image = $request->file('ilogo');

      $im = rand(1000, 9999);

      $new_name = $ins_name.'_'.$im.'.' . $image->getClientOriginalExtension();

      // $file = $request->file->storeAs('public/upload/flag', $new_name);

       $id = $request->id;

      $image->move(public_path('public/upload/ins_list'), $new_name);

                  $data = [
                                'ins_name' => $ins_name,
                                'country_id' => $country_name, 
                                'rank' => $request->rank,
                                'ug_pg_fee' => $request->ug_pg_fee,
                                'ug_fee_type' => $request->ug_fee_type,
                                'cost_live' => $request->cost_live,
                                'cost_type' => $request->cost_type,
                                'accommodation' => $request->accommodation,
                                'type_institute' => $request->type_institute,
                                'found_year' => $request->found_year,
                                'ilogo' => $new_name,
                            ];

        $update =  DB::table('institute_list')->where('id', $id)->update($data);


       if ($update>0) {
         
            return response()->json(['error'=> false, 'message' =>'Data Updated Successfully!']);
        }
        return response()->json(['error'=> true, 'message' => 'Somthing went Wrong, Please Try Again']);

  
    }

    public function Ins_list_deactivate(Request $request)
    {
        $id = $request->id;


         $data = [
                    'Is_active' => "No",
                  ];

       
       $query =  DB::table('institute_list')->where('id', $id)->update($data);

       
    
       
        if ($query>0)
        {
            return response()->json(['error'=> false, 'message' => 'Details deactivated successfully !']);
            
        }
        else
        {
            return response()->json(['error'=> true, 'message' => 'Something went wrong !',]);
        }
    }

    public function Ins_list_activate(Request $request)
    {
        $id = $request->id;



         $data = [
                                'Is_active' => "Yes",
                            ];

       
       $query =  DB::table('institute_list')->where('id', $id)->update($data);

       
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
