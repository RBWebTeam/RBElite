<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;
use Validator;
use Redirect;
use Session;
use URL;
use Mai;

class CompanyMasterController extends Controller
{
      

       public function companymaste(Request $req){

                    $company_master=DB::table('company_master')->get();
            return view('dashboard.companylist',['company_master'=>$company_master]);


              
       }



       public function companymaste_save(Request $req){

       	                  $destinationPath = public_path(). '/images/upload';

                        
                 
                 $error=1;
       	         $val =Validator::make($req->all(), [
                'name' => 'required|min:5',
                'contact_person' => 'required',
                'contact' => 'required|regex:/^[0-9]{10}+$/',
                'email' => 'required|email',
                'company_id' => 'required',
                'logo' => 'required | mimes:jpeg,jpg,png | max:1000'
                 
                            ]);

           if ($val->fails()){
              return response()->json($val->messages(), 200);
           }else{

                          $logo = $req->file('logo');
                          $fileName = rand(1, 999) . $logo->getClientOriginalName();
                          $logo->move($destinationPath, $fileName);  
                  
   DB::table('company_master')->insert([
    ['name'            =>$req->name, 
     'contact_person'         =>$req->contact, 
     'contact_no'     =>$req->contact_no, 
     'email'         =>$req->email, 
     'company_id' =>$req->company_id,
     'logo'  =>$fileName,
     'created_at'      =>date('Y-m-d H:i:s'),
     'ip'              =>$req->ip(),
     'user_id'         =>0,
 ],   
]);
   return $error=0;

           }    
       }
}
