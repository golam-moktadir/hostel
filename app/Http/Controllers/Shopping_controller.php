<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
class Shopping_controller extends Controller
{
    public function __construct(){
        date_default_timezone_set('Asia/Dhaka');
    }
    public function index(){
        if(Session::has('email')){
            return view('shopping/shopping_entry');
        }
        else{
            Session::flash('message','You must login first');
            return redirect('/');
        }
    }
    public function insert(Request $request){
	
        $data = DB::table('shopping')->where('year',$request->year)
                             ->where('month',$request->month)
                             ->where('days',$request->days)
                             ->first();
        if(!empty($data->id)){
            Session::put('message','You Have Already Inserted Todays cost');
            return redirect::to('/shopping_view');
        }
        else{
            	$data = array(
        		'year'=>$request->year,
        		'month' =>$request->month,
        		'days' =>$request->days,
        		'shopping_cost' => $request->shopping_cost,
                'unique_id' => md5(time()),
                'created_at'=>date('Y-m-d h:i:s a')
        		);
        	DB::table('shopping')->insert($data);   
            Session::put('message','You Have Inserted Information');
            return redirect::to('/shopping_view'); 	
        }
    }
    public function view(){
       if(Session::has('email')){ 
		$data['value'] = DB::table('shopping')->orderBy('id', 'desc')->get();
		return view('shopping/shopping_view',$data);
        }
        else{
            Session::flash('message','You must login first');
            return redirect('/');
        }
    }
    public function edit($id){
    	$data['shopping'] = DB::table('shopping')->where('unique_id', $id)->first();
        return view('shopping/shopping_edit',$data);    	 
    }
    public function update(Request $request){

            $data = array(
                'year' =>$request->year,
                'month' =>$request->month,
                'days' => $request->days,
                'shopping_cost'=>$request->shopping_cost
            );
            DB::table('shopping')->where('unique_id',$request->id)->update($data); 
            Session::put('message','You Have Updated Information');
            return redirect::to('/shopping_view'); 
    }
    public function delete($id){
        DB::table('shopping')->where('unique_id',$id)->delete();
        Session::put('message','You Have Deleted Information');
        return redirect::to('/shopping_view');

    }
}
