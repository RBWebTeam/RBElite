<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Response;


class UploadDocumentController extends CallApiController
{
	public function upload(Request $req){
		$data=0;
		try {
				$file=$req->file('docfile');
				$location='/uploads/'.$req->userid.'/';
		        $destinationPath = $_SERVER['DOCUMENT_ROOT'] .$location;
		        $filename=$req->doctype.".".$file->getClientOriginalExtension();
		        $file->move($destinationPath,$filename);
		        $path=$location.$filename;
		        $data=DB::select("call upload_doc(?,?,?)",[$path,$req->userid,$req->doctype]);

           
		} catch (\Exception $e) {
			// print_r($e->getMessage());
		}
	
       if($data==1){
                return $this::send_success_response("Upload Successfully","Success",URL('/').$path);
            }else{
                
                return $this::send_failure_response("Failed to upload","failure",[]); 
            }
        
	}
}