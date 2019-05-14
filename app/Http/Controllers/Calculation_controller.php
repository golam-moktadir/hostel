<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
class Calculation_controller extends Controller
{
    public function __construct(){
        date_default_timezone_set('Asia/Dhaka');
    }
    public function index(){
        if(Session::has('email')){
            $data['value'] = DB::table('student_data')->orderBy('id', 'desc')->get();
            return view('meal_calculate/meal_calculate',$data);
        }
        else{
            Session::flash('message','You must login first');
            return redirect('/');
        }
    }
    public function meal_calculate_form($id){
        $data['student'] = DB::table('student_data')->where('unique_id',$id)->first();
		$data['meal'] = DB::table('meal_entry')->where('student_id',$data['student']->id)->first();
		return view('meal_calculate/meal_calculate_form',$data);
    }
    public function meal_calculation_view(Request $request){
	
        Session::put('year',$request->year);    
        Session::put('month',$request->month);  
        Session::put('student_id',$request->student_id);

        return redirect::to('/final_calculation');
       		
    }
    public function final_calculation(){

        $year = Session::get('year');
        $month = Session::get('month');
        $student_id = Session::get('student_id');
        
        $data['student'] =DB::table('student_data')->where('id',$student_id)->first();
        $data['total_shopping'] = DB::table("shopping")->where('year',$year)
                                                       ->where('month',$month)
                                                       ->sum('shopping_cost');
        $data['total_meal'] = DB::table("meal_entry")->sum('day_meal');  
        $data['nijer_meal'] = DB::table("meal_entry")->where('year',$year)
                                                     ->where('month',$month)
                                                     ->where('student_id',$student_id)
                                                     ->sum('day_meal');   
        $data['nijer_fee'] = DB::table("meal_fee")->where('year',$year)
                                                  ->where('month',$month)
                                                  ->where('student_id',$student_id)
                                                  ->sum('meal_fee');
		return view('meal_calculate/meal_calculate_view',$data);
    }
}
