@extends('include.master')
@section('content')
    

					          <!-- Body Content Start ---->
					            <div id="content" style="overflow:scroll;">
								 <div class="container-fluid white-bg">
								 <div class="col-md-12"><h3 class="mrg-btm">Elite List</h3></div>

								 
								  
								 
								 <!-- Date Start -->
								<div class="col-md-4">
								<div class="form-group">
					                <p> <a href="#" class="btn btn-default btn-sm"    data-toggle="modal" data-target="#Elite-Modal"> <span class="glyphicon glyphicon-plus"></span> Agent  </a> </p>
					            </div>
					           </div>
							  
							   
								 <div class="col-md-12">
								 <div class="overflow-scroll">
								 <div class="table-responsive" >
									<table class="datatable-responsive table table-striped table-bordered dt-responsive nowrap" id="example">
					                 <thead>
					                  <tr>
					                    <th>ID</th>
					                    <th>Card Name</th>
                                        <th>Short Name</th>
                                        <th>Card Number</th>
                                        <th>Date</th>


					                 </tr>
					                </thead>
					                <tbody>
					                <tr>
					                  @foreach($card as $val)
					                   <td>{{$val->inc}}</td>
					                    <td>{{$val->name}}</td>
                                         <td>{{$val->Short_Name}}</td>
                                          <td>{{$val->serial_card}}</td>
                                          <td>{{$val->created_on}}</td>
                                     </tr>
					                 @endforeach
					             </tbody>
					            </table>
								</div>
								</div>
								
								 
								</div>
								
					            </div>
					            </div>
					   
                                
                        <?php echo $pagina ;?>
						


<div class="modal fade" id="Elite-Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Elite Card ADD</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" method="post"  id="Elite_add_from" > {{ csrf_field() }}
		  <div class="form-group">
		        <label for=" " class="control-label col-xs-2">Company Name </label>
		        <div class="col-xs-10">
		        <select class="form-control" name="com_id" id="com_id">
		           <option  > SELECT --</option>
		           @foreach($company_master as $val)
									 <option value="{{$val->id}}">{{$val->name}}</option>           
					 @endforeach
				</select>
		            
		        </div>
		    </div>


		    <div class="form-group">
		        <label for=" " class="control-label col-xs-2"> shortcut name  </label>
		        <div class="col-xs-3">
		            <input type="text" class="form-control" name="Short_Name" id="Short_Name"  >
		        </div>
		    </div>

		    
		    <div class="form-group">
		        <label for=" " class="control-label col-xs-2">number</label>
		        <div class="col-xs-3">
		            <input type="text" class="form-control" name="numb" id="numb" onkeypress="return Numeric(event)"   >
		        </div>
		    </div>

             <div class="form-group">
		         <label for=" " class="control-label col-xs-2"> </label>
		        
		            <label   id="elitevalid_id" >    </label>
		        
		    </div>
		      

		    
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="Elite_add_id">Save changes</button>
      </div>
    </div>
  </div>
</div>


 



@endsection		

 <?php 
   
 



 ?>


 <style type="text/css">
 	
 	.navi {
 
    width: 500px;
 
    margin: 5px;
 
    padding:2px 5px;
 
    border:1px solid #eee;
 
    }
 
 
 
    .show {
 
    color: blue;
 
    margin: 5px 0;
 
    padding: 3px 5px;
 
    cursor: pointer;
 
    font: 15px/19px Arial,Helvetica,sans-serif;
 
    }
 
    .show a {
 
    text-decoration: none;
 
    }
 
    .show:hover {
 
    text-decoration: underline;
 
    }
 
 
 
 
 
    ul.setPaginate li.setPage{
 
    padding:15px 10px;
 
    font-size:14px;
 
    }
 
 
 
    ul.setPaginate{
 
    margin:0px;
 
    padding:0px;
 
    height:100%;
 
    overflow:hidden;
 
    font:12px 'Tahoma';
 
    list-style-type:none;  
 
    } 
 
 
 
    ul.setPaginate li.dot{padding: 3px 0;}
 
 
 
    ul.setPaginate li{
 
    float:left;
 
    margin:0px;
 
    padding:0px;
 
    margin-left:5px;
 
    }
 
 
    ul.setPaginate li a
 
    {
 
    background: none repeat scroll 0 0 #ffffff;
     border: 1px solid #cccccc;
 
    color: #999999;
 
    display: inline-block;
 
    font: 15px/25px Arial,Helvetica,sans-serif;
 
    margin: 5px 3px 0 0;
 
    padding: 0 5px;
 
    text-align: center;
 
    text-decoration: none;
 
    }  
 
 
 
    ul.setPaginate li a:hover,
 
    ul.setPaginate li a.current_page
 
    {
 
    background: none repeat scroll 0 0 #0d92e1;
 
    border: 1px solid #000000;
 
    color: #ffffff;
 
    text-decoration: none;
 
    }
 
 
 
    ul.setPaginate li a{
 
    color:black;
 
    display:block;
 
    text-decoration:none;
 
    padding:5px 8px;
 
    text-decoration: none;
 
    }

 </style>