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


                   $product_master= DB::select('call sp_product_master()');
          // $product_master=DB::table('product_master')->get();
           return view('dashboard.product_list',['product_master'=>$product_master]);
         

  }


  public function product_add(){   


           $query=DB::table('product_type_master')->select('id','name')->get();
           $company=DB::table('company_master')->select('id','name')->get();
           $docu_required=DB::table('documents_required')->get();

           return view('dashboard.product_add',['query'=>$query,'docu_required'=>$docu_required,'company'=>$company]);
         

  }


  public function category_id(Request $req){
                     
              


             $query=DB::table('product_subcategory')->where('product_type_id','=',$req->category_id)->get();
          
              return $query;


  }


 
 public function product_save(Request $req){      
  $destinationPath = public_path(). '/images/upload'; 
    $validator = Validator::make($req->all(), [
    'name' => 'required',
    'category_id' => 'required|not_in:0',
     'Sub_Category_ID' => 'required',
      'charge' => 'required',
       'agent_commision' => 'required',
         'logo' => 'required | mimes:jpeg,jpg,png  ',
        'company' =>'required|not_in:0',
        'required_field' => 'required|not_in:0',
            ]);

  if ($validator->fails()) {
    return redirect('/product-add')
    ->withErrors($validator)
    ->withInput();
  }else{
    $logo = $req->file('logo');
                          $fileName = rand(1, 999) . $logo->getClientOriginalName();
                          $logo->move($destinationPath, $fileName);  

 DB::table('product_master')->insert([
    ['name'            =>$req->name, 
     'catg_id'         =>$req->category_id, 
     'sub_catg_id'     =>$req->Sub_Category_ID, 
     'charges'         =>$req->charge, 
     'agent_commision' =>$req->agent_commision,
     'required_field'  =>implode(',', $req->required_field),
     'flag'            =>0,
     'created_at'      =>date('Y-m-d H:i:s'),
     'is_active'       =>0,
     'ip'              =>$req->ip(),
     'user_id'         =>Session::get('id'),
     'company_id'      =>$req->company,
     'product_logo'      =>$fileName,
 ],   
]);

 return redirect('/product-list');
}

}



public function category_list(){


        $query=DB::table('product_type_master')->select('id','name','created_at','ip')->get();

           return view('dashboard.category_list',['query'=>$query]);

}


public function categorysave(Request $req){     

  $status=1;
  try {

 DB::table('product_type_master')->insert([
    [
     'name' =>$req->name, 
     'ip'   =>$req->ip(),
     'created_at' =>date('Y-m-d H:i:s'), 
    ],   
]);
        return $status=0;
        }catch (\Exception $e) {

              return  $status=1;
 }



}




public function sub_category_id(Request $req){      

	    
	      $query=DB::table('product_subcategory')->where('product_type_id','=',$req->sub_category_id)->get();
	      return  $query;
 
}


public function sub_category_save(Request $req){   

 $status=1;
  try {

 DB::table('product_subcategory')->insert([
    [
     'product_type_id' =>$req->p_id,
     'subcategory' =>$req->name, 
     'created_at' =>date('Y-m-d H:i:s'), 
     'flage'=>0
    ],   
]);
        return $status=0;
        }catch (\Exception $e) {

              return  $status=1;
 }



}



}
