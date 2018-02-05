<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;
use Validator;
use Redirect;
use Session;
use URL;
use Mail;

class AgentController extends Controller
{
       

        public function agent_list(){
             
              $agent_m=DB::select('call sp_agent_master()');



             return view('dashboard.agent_list',['agent_m'=>$agent_m]);
            
        }



        public function agent_save(Request $req){
                  
                  $error=1;
       	         $val =Validator::make($req->all(), 
       	         [
                'ag_name' => 'required',
                'ag_address' => 'required',
                'ag_contactNo' => 'required|regex:/^[0-9]{10}+$/',
                'ag_email' =>  'required|email|unique:agent_master',
                'rto_id' => 'required' 
                ]);

           if ($val->fails()){
              return response()->json($val->messages(), 200);
           }else{
        	   print_r($req->all());

        	   return $error=0;

        	}
        }


        public  function mastercard(){

                          
                      //   $query=DB::table("card_master")->select('card_id','short_name','card_master')->first();


 
for($i=0;$i<20;$i++){
         $number=str_pad($i,10,"0",STR_PAD_LEFT);
   
  echo "RB".$number."<br>";
}


                                

 
 

        }
}
