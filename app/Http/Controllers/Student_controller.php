<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Student_controller extends Controller{
	public function index(){
		return view('admin/index');
	}
	public function add_student(){
		return view('admin/student/add_student');
	}
	public function insert_student(Request $request){
		  $request->validate([
          				  'image' => 'required|file|max:1024',
         				 ]);
         return $request->image->store('logos');
         

		die;
		 echo "<pre>";
         	print_r($request->file('image')->getClientOriginalName());
         echo "</pre>";
		die;
		//$file= $request->file('image');
		// $path='Uploads';
		// $file->move($path.'/'.$file->getClientOriginalName());
		//  die();
		$data=array(
					'name'=>$request->name,
					"sex"=>$request->sex,
					"class"=>$request->class,
					"shift"=>$request->shift,
					'branch'=>$request->branch,
					"class_roll"=>$request->class_roll,
					"birthday"=>$request->birthday,
					"blood_group"=>$request->blood_group,		
					'religion'=>$request->religion,
					"mobile_number"=>$request->mobile_number,
					"father_name"=>$request->father_name,
					"mother_name"=>$request->mother_name,
					'village'=>$request->village,
					"post_office"=>$request->post_office,
					"post_code"=>$request->post_code,
					"thana"=>$request->thana,	
					"district"=>$request->district,
					"guardian_number"=>$request->guardian_number,		
					"image"=>$file->getClientOriginalName(),
					"unique_id"=>md5(time())	
				);
		DB::table('student_data')->insert($data);
		return view('admin/student/add_student');
	}
}