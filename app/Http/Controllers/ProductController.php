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
class ProductController extends Controller
{
    
  public function product_list(){

           $product_master=DB::table('product_master')->select('id','name')->get();
           return view('dashboard.product_list',['product_master'=>$product_master]);
         

  }


  public function product_add(){


           $query=DB::table('product_type_master')->where('parent_id','=',0)->get();
           $docu_required=DB::table('documents_required')->get();


           
           return view('dashboard.product_add',['query'=>$query,'docu_required'=>$docu_required]);
         

  }


  public function category_id(Request $req){
                     
              


             $query=DB::table('product_type_master')->where('parent_id','=',$req->category_id)->get();
          
              return $query;


  }


 
 public function product_save(Request $req){
    $validator = Validator::make($req->all(), [
    'name' => 'required',
    'category_id' => 'required',
     'Sub_Category_ID' => 'required',
      'charge' => 'required',
       'agent_commision' => 'required',
        'required_field' => 'required',
            ]);

  if ($validator->fails()) {
    return redirect('/product-add')
    ->withErrors($validator)
    ->withInput();
  }else{
 DB::table('product_master')->insert([
    ['name'            =>$req->name, 
     'catg_id'         =>$req->category_id, 
     'sub_catg_id'     =>$req->Sub_Category_ID, 
     'chrages'         =>$req->charge, 
     'agent_commision' =>$req->agent_commision,
     'required_field'  =>$req->required_field,
     'flag'            =>0,
     'created_at'      =>date('Y-m-d H:i:s'),
     'is_active'       =>0,
     'ip'              =>$req->ip(),
     'user_id'         =>0,
 ],   
]);

 return redirect('/product-add');
}

}



public function category_list(){


        $query=DB::table('product_type_master')->where('parent_id','=',0)->get();

           return view('dashboard.category_list',['query'=>$query]);

}


public function categorysave(Request $req){

  $status=1;
  try {

 DB::table('product_type_master')->insert([
    ['name' =>$req->name, 
     'parent_id' =>0,  
    ],   
]);
        return $status=0;
        }catch (\Exception $e) {

              return  $status=1;
 }



}




public function sub_category_id(Request $req){

	    
	      $query=DB::table('product_type_master')->where('parent_id','=',$req->sub_category_id)->get();
	      return  $query;
 
}


public function sub_category_save(Request $req){

 $status=1;
  try {

 DB::table('product_type_master')->insert([
    ['name' =>$req->name, 
     'parent_id' =>$req->p_id,  
    ],   
]);
        return $status=0;
        }catch (\Exception $e) {

              return  $status=1;
 }



}



}
