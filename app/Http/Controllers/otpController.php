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

class otpController extends CallApiController
{

  public function otpinsert(Request $req)
  {
    //try{
//////////////////////////////////////////////////////

//public function vehicle_inspection_otp(Request $req){
      $status=0;
      $msg="success";
      try {
        // $otp=123456;
      $otp = mt_rand(100000, 999999);
      
            Session::put('temp_contact', $req['mobile']);
            // print_r(Session::get('temp_contact'));exit();
            $post_data='{"mobNo":"'.$req->mobile.'","msgData":"your otp is '.$otp.' - RupeeBoss.com - Elite",
                        "source":"WEB"}';
                        // print_r( $post_data);exit();
            $url = "http://beta.services.rupeeboss.com/LoginDtls.svc/xmlservice/sendSMS";
            //$url = $this::$service_url_static."LoginDtls.svc/xmlservice/sendSMS";
            $result=$this->call_json_data_api($url,$post_data);
            $http_result=$result['http_result'];
            $error=$result['error'];
            $obj = json_decode($http_result);

            //echo $obj->status;//$http_result["status"];
            // print_r($post_data);exit();
            // statusId response 0 for success, 1 for failure

            /*$query=DB::table('vehicle_inspection_otp')
            ->insertGetId(['mobile_no'=>$req->mobile,
              'otp'=>$otp,
              'created_at'=>date("Y-m-d H:i:s"),
              'updated_at'=>date("Y-m-d H:i:s")]);
            
            if ($query) {
              return response()->json(array('status' =>0,'message'=>"success"));
            }*/
      /*} catch (Exception $ee) {
        return response()->json(array('status' =>1,'message'=>$ee->getMessage()));
      }*/
      
    
    //echo $http_result[0]->status." ";
   echo $obj->status;

////////////////////////////////
      
      if($obj->status == "success"){
      $query = DB::select('call usp_insert_otp(?,?,?,?)',array($otp,$req->email,$req->mobile,$req->ip));
      return $this::send_success_response('OTP Generated succesfully',"Success",$otp);
    }
    else{
      return $this::send_failure_response("Error occured while sending OTP","failure","failure tested");
    }

      
    }
    catch(Exception $e)
    {
      return $this::send_failure_response($e->getMessage(),"failure",$e->getMessage());
    }
  }

  public function otpverify(Request $req)
  {
    try{

      $query = DB::select('call usp_verify_otp(?,?,?)',array($req->otp,$req->mobile,$req->email));

      return $this::send_success_response($query[0]->Result,"Success","Test Succeed");
    }
    catch(Exception $e)
    {
      return $this::send_failure_response($e->getMessage(),"failure","failure tested");
    }
  }



}

?>