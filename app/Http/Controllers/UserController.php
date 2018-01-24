<?php

namespace App\Http\Controllers;


use Request;
class UserController extends InitialController
{
    public function data(Request $req){
    	//print_r(Request::all());
    	return $this::send_success_response("test message","success","askldjaskldjlkasjdklas");
    }
}
