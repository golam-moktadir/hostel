<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
class Login_controller extends Controller
{
    public function index(){
    	
    $months = array('01'=>'January','02'=>'February','03'=>'March','04'=>'April', '05'=>'May', '06'=>'June', '07'=>'July', '08'=>'August', '09'=>'September', '10'=>'October', '11'=>'November', '12'=>'December');

    	if(Session::has('email')){
            $data['student'] = DB::table("student_data")->count();
            foreach($months as $key=>$month){
                if($key==date('m'))
                 $data['total_shopping'] = DB::table("shopping")->where('year',date('Y'))
                                                   ->where('month',$months)
                                                   ->sum('shopping_cost');
                 $data['month_fee'] = DB::table("rent")->where('year',date('Y'))
                                                   ->where('month',$months)
                                                   ->sum('month_fee'); 
                 $data['day_meal'] = DB::table("meal_entry")->where('year',date('Y'))
                                                   ->where('month',$months)
                                                   ->sum('day_meal');       
            }
            $data['total_fee'] = DB::table('fee_schedule')->orderBy('id','desc')->first();
    		return view('index',$data);
    	}
    	else{
    		return view('login');
    	}
    }
    public function login_method(Request $request){
    	$data = DB::table('register')->where('email', $request->email)
    								 ->where('password', $request->password)
    								 ->first();
    	if(!empty($data->id)){
    		Session::put('email',$data->email);
    		return redirect::to('/');
    	}
    	else{
    		return redirect::to('/');	
    	}
    }
    public function logout_method(){
    	Session::forget('email');
    	Session::flash('message','You Have Logged Out Successfully');
    	return redirect::to('/');
    }
    public function register_method(){
    	return view('register');
    }
    public function register_data(Request $request){

    	$data = array(
    				'firstname'=>$request->firstname,
    				'lastname'=>$request->lastname,
    				'gender'=>'male',
    				'mobile_no'=>$request->mobile_no,
    				'email'=>$request->email,
    				'password'=>$request->password,
    				'confirm_password'=>$request->confirm_password,
    				'status'=>0
    			);
    	DB::table('register')->insert($data);
    	Session::flash('message','You Have Inserted Information');
    	return redirect::to('/register_method');
    }
}
