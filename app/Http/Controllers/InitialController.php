<?php

namespace App\Http\Controllers;
use Response;
use Request;
class InitialController extends Controller
{
      public function send_success_response($message,$status,$data){
      	
      	$res = array('message' =>$message ,'status'=>$status,'status_code'=>0,'MasterData'=>$data );
      	return Response::json($res);
      }
      public function send_failure_response($message,$status,$data){

      	$res = array('message' =>$message ,'status'=>$status,'status_code'=>1,'MasterData'=>[] );
      	return Response::json($res);
      }
}
