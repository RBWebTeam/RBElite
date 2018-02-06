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

class UserController extends InitialController
{
     public static $service_url_static = "http://services.rupeeboss.com/";
    public function data(Request $req){
    	//print_r(Request::all());
    	return $this::send_success_response("test message","success","askldjaskldjlkasjdklas");
    }

    public function errordata(Request $req){
    	return $this::send_failure_response("test message","failure","failure tested");
    }

    public function getdata(Request $req)
	{		
		return $this::send_failure_response_new("Govind","Success","Test Succeed");
	}

    public function insertdata(Request $req)
    {
        try{        

            $query = DB::select('call usp_user_insert(?,?,?,?,?)',array($req->elite_card_no,$req->policy_no,$req->mobile_no,$req->email_address,$req->password));
            if(count($query) > 0)    
                return $this::send_success_response("insert succeed" ,"Success",$query);
            else
                return $this::send_failure_response("insert failed ","failure",$query);
        }
        catch(Exception $e)
        {
            return $this::send_failure_response($e->getMessage(),"failure",$e->getMessage());
        }
    }

    public function getuser(Request $req)
    {
        try{
            $query = DB::select('call usp_getuser_detail(?,?)',array($req->mobile,$req->email));
            if(count($query) > 0)
                return $this::send_success_response("Records fetched successfully","success",$query);
             else
                return $this::send_failure_response("get user failed ","failure",$query);            
        }
        catch(Exception $e)
        {
            return $this::send_failure_response($e->getMessage(),"failure",$e->getMessage());
        }
    }

    public function updateuser(Request $req)
    {
        try{
            $query = DB::select('call usp_updateuser_details(?,?,?,?,?,?,?,?,?,?)',array($req->name,$req->email,$req->mobile,
            $req->rto,$req->address,$req->area,$req->pincode,$req->city,$req->state,$req->otp));
            
            if(count($query) > 0)
                return $this::send_success_response($query[0]->Result ,"Success",$query[0]->Result);
             else
                return $this::send_failure_response("update user failed ","failure",$query);            
        }
        catch(Exception $e)
        {
            return $this::send_failure_response($e->getMessage(),"failure",$e->getMessage());
        }
    } 

    public function login(Request $req)
    {
        try{
            
            $query = DB::select('call usp_login(?,?)',array($req->mobile,$req->password));

            if(count($query) > 0)   
                return $this::send_success_response('Login successfully' ,"Success",$query);
             else
                return $this::send_failure_response("login failed ","failure",$query);     
        }
        catch(Exception $e)
        {
            return $this::send_failure_response($e->getMessage(),"failure",$e->getMessage());
        }
        
    }

    

}

?>
