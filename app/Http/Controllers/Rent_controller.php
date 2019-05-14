<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
class Rent_controller extends Controller
{
    public function __construct(){
        date_default_timezone_set('Asia/Dhaka');
    }
    public function pay_fee($id){

		$data['student'] = DB::table('student_data')
								 ->where('unique_id',$id)
								 ->first();
		$data['total_fee'] = DB::table('fee_schedule')->orderBy('id', 'desc')->first();
		return view('rent/pay_fee',$data);
    }
    public function insert(Request $request){
	
        $data = DB::table('rent')->where('year',$request->year)
                             ->where('month',$request->month)
                             ->where('student_id',$request->student_id)
                             ->first();
        if(!empty($data->id)){
            Session::put('message','You Have Already taken this student fee');
            return redirect::to('/rent');
        } 
        else{   
    		$due = $request->total_fee - $request->month_fee;
    		if($due <= 0)
    		$due = 'No due';
        	$data = array(
        				'year'=>$request->year,
        				'month' =>$request->month,
        				'month_fee' =>$request->month_fee,
        				'due' =>$due,
        				'student_id'=>$request->student_id,
                        'unique_id'=>md5(time()),
                        'created_at'=>date('Y-m-d h:i:s a')
        			);
        	DB::table('rent')->insert($data);   
            Session::put('message','You Have Inserted Information');
            return redirect::to('/paid_rent');
        } 	
    }
    public function view(){
       if(Session::has('email')){ 
            $data['value'] = DB::table('student_data')->orderBy('id', 'desc')->get();
            return view('rent/rent',$data);
        }
        else{
            Session::flash('message','You must login first');
            return redirect('/');
        }
    }
    public function paid_rent(){
       if(Session::has('email')){  
            $data['students'] = DB::table('student_data')->orderBy('id', 'desc')->get();
            $data['value'] = DB::table('rent')->orderBy('id', 'desc')->get();
            return view('rent/paid_rent',$data);
        }
        else{
            Session::flash('message','You must login first');
            return redirect('/');    
        }
    }
    public function edit($id){
    	$data['total_fee'] = DB::table('fee_schedule')->orderBy('id', 'desc')->first();
        $data['rent'] = DB::table('rent')->where('unique_id', $id)->first();    
        $data['student'] = DB::table('student_data')->where('id', $data['rent']->student_id)->first();
        return view('rent/edit_rent', $data);
    }
    public function update(Request $request){

    		$due = $request->total_fee - $request->month_fee;
			if($due <= 0)
			$due = 'No due';
            $data = array(
                'year' =>$request->year,
                'month' =>$request->month,
                'month_fee' => $request->month_fee,
                'due'=>$due
            );
            DB::table('rent')->where('unique_id',$request->id)->update($data); 
            Session::put('message','You Have Updated Information');
            return redirect::to('/paid_rent'); 
    }
    public function due_pay($id){
    	$data['total_fee'] = DB::table('fee_schedule')->orderBy('id', 'desc')->first();
        $data['rent'] = DB::table('rent')->where('unique_id', $id)->first(); 
        $data['student'] = DB::table('student_data')->where('id', $data['rent']->student_id)->first();    
        return view('rent/due_pay', $data);
    }
    public function update_payment(Request $request){

		 if($request->total_fee == $request->month_fee + $request->pay){
			$month_fee = $request->month_fee + $request->pay;
			$due = 'No due';
		}
		else{ 
			$month_fee = $request->month_fee + $request->pay;
			$due = $request->total_fee - $month_fee;
		}
		$data = array(
                'month_fee' => $month_fee,
                'due'=>$due
            );
	    DB::table('rent')->where('unique_id',$request->id)->update($data); 
        Session::put('message','You Have Updated Information');
        return redirect::to('/paid_rent'); 
    }
    public function delete($id){
        DB::table('rent')->where('unique_id',$id)->delete();
        Session::put('message','You have Deleted Information');
        return redirect('paid_rent');
    }
}
