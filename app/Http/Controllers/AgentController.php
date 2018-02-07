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

class AgentController extends InitialController
{
       

        public function agent_list(){
             
              $rto=DB::select('call sp_rto_master()');
              $agent_m=DB::select('call sp_agent_master()');
             return view('dashboard.agent_list',['rto'=>$rto,'agent_m'=>$agent_m]);
            
        }



        public function agent_save(Request $req){
                  
                 $error=null;
                  try{   
       	         $val =Validator::make($req->all(), 
       	         [
                'ag_name' => 'required',
                'ag_address' => 'required',
                'ag_contact_no' => 'required|regex:/^[0-9]{10}+$/',
                'ag_email' =>  'required|email|unique:agent_master',
                'password'=> 'required|min:6',
                'confirm_password'=> 'required|min:6|same:password',
                'rto_id' =>'required|not_in:0'
                ]);

           if ($val->fails()){
              return response()->json($val->messages(), 200);
           }else{
        	   
              DB::table('agent_master')->insert(
                [ 
                'ag_name' => $req->ag_name, 
                'ag_address' =>$req->ag_address,
                'ag_contact_no'=>$req->ag_contact_no,
                'ag_email' => $req->ag_email, 
                'agent_password' =>md5($req->password),
                'rto_id'=>$req->rto_id,
                'user_id'=>Session::get('id'),
                'created_at'=>date('Y-m-d H:i:s'),
                'is_active'=>0,

                ]);

        	     $error=0; 	} 
             }catch (Exception $e){
               $error=1;                 
            }

            return $error;

        }


        public  function mastercard(){
                         $count=DB::table("elite_card_master")->select('inc')->get();
                         

 
if(isset($_GET["page"])){
      $page = (int)$_GET["page"];
    }else{
    $page = 1;
}

    $setLimit = 10;
    $pageLimit = ($page * $setLimit) - $setLimit;
    $pagina=$this->displayPaginationBelow($setLimit,$page,count($count));

                          $card=DB::select('call sp_elite_card_master(?,?)',array($pageLimit,$setLimit));
                         $company_master=DB::table("company_master")->select('id','name')->get();
 
 
 
                        return view('dashboard.elite_card',['card'=>$card,'company_master'=>$company_master,'count'=>$count,'pagina'=>$pagina]);

 
 
        }


        public function elite_save(Request $req){
                $error=null;
                try{   
                 $lst_id=DB::table('elite_card_master')->select('serial_card')->orderBy('serial_card', 'DESC')->first();
                 $ins=0;
                 $var =(int)$req->numb; 
                 if($lst_id){
                   $ins=$lst_id->serial_card;
                 }else{
                    $ins=0;
                 }
for($i=0;$i<$var;$i++){  $ins++;
         $number=str_pad($ins,12,"0",STR_PAD_LEFT);
         DB::table('elite_card_master')->insert([ 
          'company_id' => $req->com_id, 
          'Short_Name' =>$req->Short_Name,
          'serial_card'=>$number,
          'created_by'=>Session::get('id'),
          'inc'=>0

          ]);
}

DB::select('call sp_inc_elite_card_master()');
$error=0;
}catch (Exception $e){
$error=1;                 
    }

return $error;

}
         
               //   $var =(int)$req->numb;
               //  for($i=0;$i<$var;$i++){
               // $number=str_pad($i,10,"0",STR_PAD_LEFT);
               //    DB::table('elite_card')->insert([ 'card_name' => $req->com_id, 'Short_Name' =>$req->Short_Name,'serial_card'=>$number,'created_by'=>1]); } }





public function rto_list(){

        $rto=DB::select('call sp_rto_master()');

        return view('dashboard.rto_list',['rto'=>$rto]);
}

public function rto_save(Request $req){

            $error=null;
                  try{   
                 
                  
                     DB::table('rto_master')->insert(
                    [ 
                'rto_location' => $req->rto_location, 
                'series_no' =>$req->series_no,
                'created_by'=>Session::get('id'),
                'create_date'=>date('Y-m-d H:i:s'),
                'is_active'=>0,

                ]);

                   $error=0;
           }catch (Exception $e){
          $error=1;                 
    }
        
}


public function displayPaginationBelow($per_page,$page,$count){
 
       $page_url="?";
  
 
        $total = $count;
 
        $adjacents = "2";
 
 
 
        $page = ($page == 0 ? 1 : $page); 
 
        $start = ($page - 1) * $per_page;                              
 
         
 
        $prev = $page - 1;                         
 
        $next = $page + 1;
 
        $setLastpage = ceil($total/$per_page);
 
        $lpm1 = $setLastpage - 1;
 
         
 
        $setPaginate = "";
 
        if($setLastpage > 1)
 
        {  
 
            $setPaginate .= "<ul class='setPaginate'>";
 
                    $setPaginate .= "<li class='setPage'>Page $page of $setLastpage</li>";
 
            if ($setLastpage < 7 + ($adjacents * 2))
 
            {  
 
                for ($counter = 1; $counter <= $setLastpage; $counter++)
 
                {
 
                    if ($counter == $page)
 
                        $setPaginate.= "<li><a class='current_page'>$counter</a></li>";
 
                    else
 
                        $setPaginate.= "<li><a href='{$page_url}page=$counter'>$counter</a></li>";                 
 
                }
 
            }
 
            elseif($setLastpage > 5 + ($adjacents * 2))
 
            {
 
                if($page < 1 + ($adjacents * 2))    
 
                {
 
                    for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
 
                    {
 
                        if ($counter == $page)
 
                            $setPaginate.= "<li><a class='current_page'>$counter</a></li>";
 
                        else
 
                            $setPaginate.= "<li><a href='{$page_url}page=$counter'>$counter</a></li>";                 
 
                    }
 
                    $setPaginate.= "<li class='dot'>...</li>";
 
                    $setPaginate.= "<li><a href='{$page_url}page=$lpm1'>$lpm1</a></li>";
 
                    $setPaginate.= "<li><a href='{$page_url}page=$setLastpage'>$setLastpage</a></li>";     
 
                }
 
                elseif($setLastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
 
                {
 
                    $setPaginate.= "<li><a href='{$page_url}page=1'>1</a></li>";
 
                    $setPaginate.= "<li><a href='{$page_url}page=2'>2</a></li>";
 
                    $setPaginate.= "<li class='dot'>...</li>";
 
                    for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
 
                    {
 
                        if ($counter == $page)
 
                            $setPaginate.= "<li><a class='current_page'>$counter</a></li>";
 
                        else
 
                            $setPaginate.= "<li><a href='{$page_url}page=$counter'>$counter</a></li>";                 
 
                    }
 
                    $setPaginate.= "<li class='dot'>..</li>";
 
                    $setPaginate.= "<li><a href='{$page_url}page=$lpm1'>$lpm1</a></li>";
 
                    $setPaginate.= "<li><a href='{$page_url}page=$setLastpage'>$setLastpage</a></li>";     
 
                }
 
                else
 
                {
 
                    $setPaginate.= "<li><a href='{$page_url}page=1'>1</a></li>";
 
                    $setPaginate.= "<li><a href='{$page_url}page=2'>2</a></li>";
 
                    $setPaginate.= "<li class='dot'>..</li>";
 
                    for ($counter = $setLastpage - (2 + ($adjacents * 2)); $counter <= $setLastpage; $counter++)

                    {

                        if ($counter == $page)

                            $setPaginate.= "<li><a class='current_page'>$counter</a></li>";

                        else

                            $setPaginate.= "<li><a href='{$page_url}page=$counter'>$counter</a></li>";                 

                    }

                }

            }

             

            if ($page < $counter - 1){

                $setPaginate.= "<li><a href='{$page_url}page=$next'>Next</a></li>";

              $setPaginate.= "<li><a href='{$page_url}page=$setLastpage'>Last</a></li>";

            }else{

                $setPaginate.= "<li><a class='current_page'>Next</a></li>";

                $setPaginate.= "<li><a class='current_page'>Last</a></li>";

            }

 

            $setPaginate.= "</ul>\n";    

        }

     

     

        return $setPaginate;

    }

    public function rto(Request $req){
      try {
        $rto = DB::table('rto_master')->select('rto_location', 'series_no')->get();
     // print_r($rto);exit();
     return $this::send_success_response('RTO updated',"success",$rto);
      } catch (Exception $e) {
        return $this::send_failure_response($e->getMessage(),"failure",null);
      }
     

    }
 
}
