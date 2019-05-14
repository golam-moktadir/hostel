<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
class Meal_controller extends Controller
{
    public function __construct(){
        date_default_timezone_set('Asia/Dhaka');
    }
    public function index(){
       if(Session::has('email')){ 
         $data['value'] = DB::table('student_data')->orderBy('id', 'desc')->get();
         return view('meal/meal',$data);
        }
        else{
            Session::flash('message','You must login first');
            return redirect('/');
        }
    }
    public function meal_entry($id){
       if(Session::has('email')){ 
		$data['student'] = DB::table('student_data')->where('unique_id',$id)->first();
		return view('meal/meal_entry',$data);
       }
       else{
        Session::flash('message','You must login first');
        return redirect('/');
       } 
    }
    public function insert(Request $request){
	
        $data = DB::table('meal_entry')->where('year',$request->year)
                             ->where('month',$request->month)
                             ->where('student_id',$request->student_id)
                             ->where('days',$request->days)
                             ->first();
        if(!empty($data->id)){
            Session::put('message','You Have Already Inserted Todays Meal');
            return redirect::to('/meal');
        }
        else{
        	$data = array(
    			'year'=>$request->year,
    			'month' =>$request->month,
    			'day_meal' =>$request->day_meal,
    			'days' =>$request->days,
                'student_id' =>$request->student_id,
                'unique_id'=>md5(time()),
                'created_at'=>date('Y-m-d h:i:s a')
        		);
        	 DB::table('meal_entry')->insert($data);   
             Session::put('message','You Have Inserted Information');
             return redirect::to('/meal_view'); 	
        }
    }
    public function meal_fee($id){

		$data['student'] = DB::table('student_data')->where('unique_id',$id)->first();
		return view('meal/meal_fee',$data);
    }
    public function meal_fee_insert(Request $request){
    	
        $data = array(
			'year'=>$request->year,
			'month' =>$request->month,
			'meal_fee' =>$request->meal_fee,
			'student_id' =>$request->student_id,
            'unique_id'=>md5(time()),
            'created_at'=>date('Y-m-d h:i:s a')
    		);
    	DB::table('meal_fee')->insert($data);  
        Session::put('message','You Have Updated Information');
        return redirect::to('/meal_fee_view'); 
    }
    public function meal_view(){
        if(Session::has('email')){
            $data['value'] = DB::table('meal_entry')->orderBy('id', 'desc')->get(); 
            $data['students'] = DB::table('student_data')->orderBy('id', 'desc')->get();
            return view('meal/meal_view', $data);
        }
        else{
            Session::flash('message','You must login first');
            return redirect::to('/');
        }
    }
    public function meal_entry_edit($id){

        $data['meal'] = DB::table('meal_entry')->where('unique_id', $id)->first();    
        $data['student'] = DB::table('student_data')->where('id', $data['meal']->student_id)->first();
        return view('meal/meal_entry_edit', $data);
    }
    public function meal_fee_edit($id){


        $data['meal_fee'] = DB::table('meal_fee')->where('unique_id', $id)->first();    
        $data['student'] = DB::table('student_data')->where('id', $data['meal_fee']->student_id)->first();
        return view('meal/meal_fee_edit', $data);
    }
    public function update_meal_fee(Request $request){

        $data = array(
                'year' => $request->year,
                'month'=>$request->month,
                'meal_fee'=>$request->meal_fee
            );
        DB::table('meal_fee')->where('unique_id',$request->id)->update($data); 
        Session::put('message','You Have Updated Information');
        return redirect::to('/meal_fee_view'); 
    }
    public function meal_fee_view(){
        if(Session::has('email')){
            $data['value'] = DB::table('meal_fee')->orderBy('id', 'desc')->get(); 
            $data['students'] = DB::table('student_data')->orderBy('id', 'desc')->get();
            return view('meal/meal_fee_view', $data);
        }
        else{
            Session::flash('message','You must login first');
            return redirect('/');
        }
    }
    public function update_meal_entry(Request $request){

		$data = array(
                'year' => $request->year,
                'month'=>$request->month,
                'day_meal' => $request->day_meal,
                'days'=>$request->days
            );
	    DB::table('meal_entry')->where('unique_id',$request->id)->update($data); 
        Session::put('message','You Have Updated Information');
        return redirect::to('/meal_view'); 
    }
    public function meal_fee_delete($id){
        DB::table('meal_fee')->where('unique_id',$id)->delete();
        Session::put('message','You Have Deleted Information');
        return redirect('/meal_fee_view');
    }
    public function meal_entry_delete($id){
        DB::table('meal_entry')->where('unique_id',$id)->delete();
        Session::put('message','You Have Deleted Information');
        return redirect('/meal_view');
    }
}
