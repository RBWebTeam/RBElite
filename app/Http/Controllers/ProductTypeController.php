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

class ProductTypeController extends InitialController
{

	public function getdata(Request $req)
	{

		try{		
			$query = DB::select('call usp_user_insert(?,?,?,?)',array($req->elite_card_no,$req->policy_no,$req->mobile_no,$req->email_address));

			return $this::send_success_response($query[0]->Result ,"Success",$query[0]->Result);
		}
		catch(Exception $e)
		{
			//return $this::send_failure_response($e->getMessage(),"failure","failure tested");
		}
	}

	public function loadproduct(Request $req)
	{
		try{
        	$query = DB::select('call usp_load_products()');
            return $this::send_success_response('Data loaded' ,"Success",$query);
        }
        catch(Exception $e)
        {
            return $this::send_failure_response($e->getMessage(),"failure",$e->getMessage());
        }
	}

	public function insertorder(Request $req)
	{	
				try{
        	$query = DB::select('call usp_order_details_insert(?,?,?,?)',array($req->prodid,$req->payment,$req->discount,$req->ip,$req->userid));
            return $this::send_success_response('Oreder Placed successfully' ,"Success",$query);
        }
        catch(Exception $e)
        {
            return $this::send_failure_response($e->getMessage(),"failure",$e->getMessage());
        }
		
	}


	public function getorderdetails(Request $req)
	{
				try{
        	$query = DB::select('call usp_load_task_list(?)',array($req->userid));
            return $this::send_success_response('Records fetched successfully' ,"Success",$query);
        }
        catch(Exception $e)
        {
            return $this::send_failure_response($e->getMessage(),"failure",$e->getMessage());
        }

	}

	public function insertproducttype(Request $req)
	{
		print_r($req);
	}


}

?>