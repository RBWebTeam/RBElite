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
class Payment_reportController extends Controller
{
  public function getview()
   {
  	return view('dashboard.Payment_report');
   }
  public function reportshow($id)
  {
  	//print_r($id);exit();
  	$sales= DB::select("call Usp_load_sales_report($id)");
  	print_r($sales);exit();
  	return view('dashboard.Payment_report',['sales'=>$sales]);
  }
 
 public function getpaymentdone()
 {
 	$sales= DB::select("call Usp_load_sales_report(1)");
 	return view('dashboard.PaymentDone',['sales'=>$sales]);
 }
 public function getpaymentpending(){
 	$paymentpending= DB::select("call Usp_load_sales_report(2)");
 	return view('dashboard.PaymentPending',['paymentpending'=>$paymentpending]);
 }
 public function getUnassignedLead(){ 	
 	$UnassignedLead= DB::select("call Usp_load_sales_report(3)");
 	return view('dashboard.UnassignedLead',['UnassignedLead'=>$UnassignedLead]);

 } 
 public function getassignedLead(){ 	
 	$assignedLead= DB::select("call Usp_load_sales_report(4)");
 	return view('dashboard.AssignedLead',['assignedLead'=>$assignedLead]);

 } 
}