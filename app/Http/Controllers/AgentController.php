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
             
              $rto=DB::select('call sp_rto_master()');
              $agent_m=DB::select('call sp_agent_master()');
             return view('dashboard.agent_list',['rto'=>$rto,'agent_m'=>$agent_m]);
            
        }



        public function agent_save(Request $req){
                  
                 $error=null;
                  try{   
       	         $val =Validator::make($req->all(), 
       	         [
                'ag_name' => 'required',
                'ag_address' => 'required',
                'ag_contact_no' => 'required|regex:/^[0-9]{10}+$/',
                'ag_email' =>  'required|email|unique:agent_master',
                'password'=> 'required|min:6',
                'confirm_password'=> 'required|min:6|same:password',
                'rto_id' =>'required|not_in:0'
                ]);

           if ($val->fails()){
              return response()->json($val->messages(), 200);
           }else{
        	   
              DB::table('agent_master')->insert(
                [ 
                'ag_name' => $req->ag_name, 
                'ag_address' =>$req->ag_address,
                'ag_contact_no'=>$req->ag_contact_no,
                'ag_email' => $req->ag_email, 
                'agent_password' =>md5($req->password),
                'rto_id'=>$req->rto_id,
                'user_id'=>Session::get('id'),
                'created_at'=>date('Y-m-d H:i:s'),
                'is_active'=>0,

                ]);

        	     $error=0; 	} 
             }catch (Exception $e){
               $error=1;                 
            }

            return $error;

        }


        public  function mastercard(){


                 
                               $card=DB::select('call sp_elite_card_master()');
                          
                       //  $card=DB::table("elite_card_master")->get();
                         $company_master=DB::table("company_master")->select('id','name')->get();

 

                        return view('dashboard.elite_card',['card'=>$card,'company_master'=>$company_master]);

 
 
        }


        public function elite_save(Request $req){
                $error=null;
                try{   
                 $lst_id=DB::table('elite_card_master')->select('serial_card')->orderBy('serial_card', 'DESC')->first();
                 $ins=0;
                 $var =(int)$req->numb; 
                 if($lst_id){
                   $ins=$lst_id->serial_card;
                 }else{
                    $ins=0;
                 }
for($i=0;$i<$var;$i++){  $ins++;
         $number=str_pad($ins,12,"0",STR_PAD_LEFT);
         DB::table('elite_card_master')->insert([ 'company_id' => $req->com_id, 'Short_Name' =>$req->Short_Name,'serial_card'=>$number,'created_by'=>Session::get('id')]);
}
$error=0;
}catch (Exception $e){
$error=1;                 
    }

return $error;

}
         
               //   $var =(int)$req->numb;
               //  for($i=0;$i<$var;$i++){
               // $number=str_pad($i,10,"0",STR_PAD_LEFT);
               //    DB::table('elite_card')->insert([ 'card_name' => $req->com_id, 'Short_Name' =>$req->Short_Name,'serial_card'=>$number,'created_by'=>1]); } }


 
}
