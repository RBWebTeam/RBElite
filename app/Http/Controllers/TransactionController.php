<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use DB;
class TransactionController extends InitialController
{
    //
       public $client_id='3bltoyw0MheRMwXY7CoubY4ZKaLdbYIwo3CV0Eyn';
    public $client_secret='97bbMq9fepAqgrQzd2SIboiQMWKb7dtBg8MLfj5ysBbjULVsyQDiIViZ8GUiN0NNfbHU7RLh4ZNVfKJkoJK4I4LQUFZX2nR41jbE5qH6MRn5uM2RYIgEiTdYw5aOdAvO';
    public $url = "https://api.instamojo.com/oauth2/token/";
    public $env = "production";


    public function getToken() {
        if (substr( $this->client_id, 0, 5 ) === "test_") {
            $this->url = "https://test.instamojo.com/oauth2/token/";
            $this->env = "test";
        }
        $curl = curl_init($this->url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, false);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, rawurldecode(http_build_query(array(
            'client_id' => $this->client_id,
            'client_secret' => $this->client_secret,
            'grant_type' => 'client_credentials'
        ))));
        $json = json_decode(curl_exec($curl));

        if(curl_error($curl))
        {
            echo 'error:' . curl_error($curl);
        }
        //print_r($json);exit();
        if (isset($json->error)) {
            return "Error: " . $json->error;
            throw new \Exception("Error: " . $json->error);
        }
        $this->token = $json;

        return $this->env. $json->access_token;
    }
        public function give_token(Request $req){
       

        $token= $this::getToken();
        
        return ($token);
    }
    public function show_orders(Request $req){
        try {
            $user_id=$req['user_id'];
            $data=DB::select('call view_sales_orders(?)',[$user_id]);

            if(sizeof($data)>0){
                return $this::send_success_response('Data loaded' ,"Success",$data);
            }else{
                print_r($data);
                return $this::send_failure_response("No order to show","failure",array()); 
            }
        } catch (\Exception $e) {
            return $this::send_failure_response($e->getMessage(),"failure",[]); 
        }
       // return Response::json($data);
    }
     public function update_orders(Request $req){
        
          try {
                    $dump=json_encode($req->all());
                    $order_id=$req['order_id'];
                    $pg_date=$req['payment_datetime'];
                    $remark=$req['remark'];
                    $txnid=$req['transaction_id'];
                    $pg_status=$req['status'];
               
                    
                    $data=DB::select("CALL update_transaction_details(?,?,?,?,?,?)",[$order_id,$pg_date,$remark,$txnid,$pg_status,$dump]);
                    return $this::send_success_response('Data Updated' ,"Success",$data);

                } catch (\Exception $e) {
                    return $this::send_failure_response($e->getMessage(),"failure",[]);
                    //return $e->getMessage();//$this::send_failure_response($e->getMessage(),"failure",""); 
                }
    }
}
