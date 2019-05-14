<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
class AdminController extends Controller{

    public function __construct(){
        date_default_timezone_set('Asia/Dhaka');
    }
    public function index(){

        if(Session::has('email')){
            return view('student/add_student');
        }
        else{
            Session::flash('message','You must login first');
            return redirect::to('/');
        }
    }
    public function insert_student(Request $request){

        $data = DB::table('student')->where('name',$request->name)
                             ->where('mobile_number',$request->mobile_number)
                             ->first();
        if(!empty($data->id)){
            Session::put('message','You Have Already Inserted This student');
            return redirect::to('/add_student');
        }
        else{
        	if($request->hasFile('image')){
        		$file = $request->file('image');
        		$image = str_random(10).$file->getClientOriginalName();
        		$file->move('upload/',$image);

        	$data = array(
        				'name' =>$request->name,
        				'sex'  =>$request->sex,
        				'class'=>$request->class,
                        'shift' =>$request->shift,
                        'branch'  =>$request->branch,
                        'class_roll'=>$request->class_roll,
                        'birthday' =>$request->birthday,
                        'blood_group'  =>$request->blood_group,
                        'religion'=>$request->religion,
                        'mobile_number' =>$request->mobile_number,
                        'father_name'  =>$request->father_name,
                        'mother_name'=>$request->mother_name,
                        'village' =>$request->village,
                        'post_office'  =>$request->post_office,
                        'post_code'=>$request->post_code,
                        'thana' =>$request->thana,
                        'district'  =>$request->district,
                        'guardian_number'=>$request->guardian_number,
                        'image'=>$image,
                        'unique_id'=>md5(time()),
                        'created_at'=>date('Y-m-d h:i:s a')
        			);
        	DB::table('student_data')->insert($data);   
            Session::put('message','You Have Inserted Information');
            return redirect::to('/student'); 		
        	}
        }
    }
    public function student(){

        if(Session::has('email')){
         $data['value'] = DB::table('student_data')->orderBy('id', 'desc')->get();
         return view('student/student',$data);
        }
        else{
            Session::flash('message','You must login first');
            return redirect('/');
        }
    }
    public function student_details($id){

        $student['data'] = DB::table('student_data')->where('unique_id', $id)->first();
        return view('student/student_profile',$student);
    }
    public function edit_student($id){
        $student['data'] = DB::table('student_data')->where('unique_id', $id)->first();     
        return view('student/edit_student',$student);
    }
     public function update_student(Request $request){

        if($request->hasFile('image')){
            $data = DB::table('student_data')->where('unique_id', $request->id)->first();
            $file = $request->file('image');
            $image = str_random(10).$file->getClientOriginalName();
            
            if(empty($data->image)){
              $file->move('upload/',$image);
            }
            else if(file_exists('upload/'.$data->image)){
               unlink('upload/'.$data->image);
               $file->move('upload/',$image);
             }
             else{
                  $file->move('upload/',$image);
             }
            $data = array(
                        'name' =>$request->name,
                        'sex'  =>$request->sex,
                        'class'=>$request->class,
                        'shift' =>$request->shift,
                        'branch'  =>$request->branch,
                        'class_roll'=>$request->class_roll,
                        'birthday' =>$request->birthday,
                        'blood_group'  =>$request->blood_group,
                        'religion'=>$request->religion,
                        'mobile_number' =>$request->mobile_number,
                        'father_name'  =>$request->father_name,
                        'mother_name'=>$request->mother_name,
                        'village' =>$request->village,
                        'post_office'  =>$request->post_office,
                        'post_code'=>$request->post_code,
                        'thana' =>$request->thana,
                        'district'  =>$request->district,
                        'guardian_number'=>$request->guardian_number,
                        'image'=>$image,
                        'updated_at'=>date('Y-m-d h:i:s a')
                    );
            DB::table('student_data')->where('unique_id',$request->id)->update($data); 
            Session::put('message','You Have Updated Information');
            return redirect::to('/student');                                                                
        }
        else{
            $data = array(
                        'name' =>$request->name,
                        'sex'  =>$request->sex,
                        'class'=>$request->class,
                        'shift' =>$request->shift,
                        'branch'  =>$request->branch,
                        'class_roll'=>$request->class_roll,
                        'birthday' =>$request->birthday,
                        'blood_group'  =>$request->blood_group,
                        'religion'=>$request->religion,
                        'mobile_number' =>$request->mobile_number,
                        'father_name'  =>$request->father_name,
                        'mother_name'=>$request->mother_name,
                        'village' =>$request->village,
                        'post_office'  =>$request->post_office,
                        'post_code'=>$request->post_code,
                        'thana' =>$request->thana,
                        'district'  =>$request->district,
                        'guardian_number'=>$request->guardian_number,
                        'updated_at'=>date('Y-m-d h:i:s a')
                    );
            DB::table('student_data')->where('unique_id',$request->id)->update($data); 
            Session::put('message','You Have Updated Information');
            return redirect::to('/student');                                                                            
        }
    }
    public function delete($id){

            $student = DB::table('student_data')->where('unique_id', $id)->first();
            DB::table('meal_entry')->where('student_id',$student->id)->delete();
            DB::table('meal_fee')->where('student_id',$student->id)->delete(); 
            DB::table('rent')->where('student_id',$student->id)->delete();   
            DB::table('student_data')->where('id',$student->id)->delete(); 
            Session::put('message','You Have Deleted Information');
            return redirect::to('/student');
    }
}
