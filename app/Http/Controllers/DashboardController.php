<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DashboardController extends InitialController
{
      public function dashboard(){

      	      return view('dashboard.index');
      }








}
