<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InitialController extends CallAPiController
{
      public function make_response($message,$status,$status_code,$data){
      	$res = array('message' =>$message ,'status'=>$status,'status_code'=>$status_code,'MasterData'=>$data );
      	return Response::json($res);
      }
}
