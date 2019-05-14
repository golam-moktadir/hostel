<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
class Schedule_controller extends Controller
{
    public function __construct(){
        date_default_timezone_set('Asia/Dhaka');
    }
    public function index(){
        return view('fee_schedule/add_new_fee');
    }
    public function insert(Request $request){
	
    	$total_fee = $request->seat_range + $request->wifi + $request->current;
    	$data = array(
    				'seat_range' =>$request->seat_range,
    				'wifi' =>$request->wifi,
    				'current'=>$request->current,
    				'total_fee' =>$total_fee,
                    'unique_id'=>md5(time()),
                    'created_at'=>date('Y-m-d h:i:s a')
    			);
    	DB::table('fee_schedule')->insert($data);   
        Session::put('message','You Have Inserted Information');
        return redirect::to('/fee_schedule'); 	
    }
    public function view(){
       if(Session::has('email')){ 
        $data['value'] = DB::table('fee_schedule')->orderBy('id', 'desc')->get();
        return view('fee_schedule/fee_schedule',$data);
        }
        else{
             Session::flash('message','You must login first');
            return redirect('/');           
        }
    }
    public function edit($id){
        $student['data'] = DB::table('fee_schedule')->where('unique_id', $id)->first();     
        return view('fee_schedule/edit_fee_schedule',$student);
    }
    public function update(Request $request){

    	$total_fee = $request->seat_range + $request->wifi + $request->current;
    	            $data = array(
                        'seat_range' =>$request->seat_range,
                        'wifi'  =>$request->wifi,
                        'current'=>$request->current,
                        'total_fee' =>$total_fee,
                        'updated_at'=>date('Y-m-d h:i:s a')
                    );
            DB::table('fee_schedule')->where('unique_id',$request->id)->update($data); 
            Session::put('message','You Have Updated Information');
            return redirect::to('/fee_schedule'); 
    }
    public function delete($id){
        DB::table('fee_schedule')->where('unique_id',$id)->delete();
        Session::put('message','You Have Deleted Information');
        return redirect::to('/fee_schedule');         

    }
}
