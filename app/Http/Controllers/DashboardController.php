<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends InitialController
{
      public function dashboard(){

      	      return view('dashboard.index');
      }
}
