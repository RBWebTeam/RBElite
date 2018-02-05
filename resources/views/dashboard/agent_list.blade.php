@extends('include.master')
@section('content')
    

					          <!-- Body Content Start ---->
					            <div id="content" style="overflow:scroll;">
								 <div class="container-fluid white-bg">
								 <div class="col-md-12"><h3 class="mrg-btm">Agent List</h3></div>

								 
								  
								 
								 <!-- Date Start -->
								<div class="col-md-4">
								<div class="form-group">
					                <p> <a href="#" class="btn btn-default btn-sm"    data-toggle="modal" data-target="#Agent-Modal"> <span class="glyphicon glyphicon-plus"></span> Agent  </a> </p>
					            </div>
					           </div>
							  
							   
								 <div class="col-md-12">
								 <div class="overflow-scroll">
								 <div class="table-responsive" >
									<table class="datatable-responsive table table-striped table-bordered dt-responsive nowrap" id="example">
					                 <thead>
					                  <tr>
					                  
					                   <th>Category  Name</th>
                                        <th>Subcategory  </th>


					                 </tr>
					                </thead>
					                <tbody>
					                <tr>
					                    <td>Category  Name</td>
                                        <td>Subcategory  </td>
                                     </tr>
					               
					             </tbody>
					            </table>
								</div>
								</div>
								
								 
								</div>
								
					            </div>
					            </div>
								<!-- Body Content Start ---->
								


						


<div class="modal fade" id="Agent-Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agent ADD</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" method="post"  id="agent_add_from" > {{ csrf_field() }}
		    <div class="form-group">
		        <label for="inputEmail" class="control-label col-xs-2">Agent Name  </label>
		        <div class="col-xs-10">
		            <input type="text" class="form-control" name="ag_name" id="ag_name"  >
		             <span id="ag_nameerr" class="help-inline"></span>
		        </div>
		    </div>

		    <div class="form-group">
		        <label for="inputEmail" class="control-label col-xs-2"> Address  </label>
		        <div class="col-xs-10">
		            <input type="text" class="form-control" name="ag_address" id="ag_address"  >
		        </div>
		    </div>

		    <div class="form-group">
		        <label for="inputEmail" class="control-label col-xs-2"> Contact No  </label>
		        <div class="col-xs-10">
		            <input type="text" class="form-control" name="ag_contactNo" id="ag_contactNo"  >
		        </div>
		    </div>

		    <div class="form-group">
		        <label for="inputEmail" class="control-label col-xs-2">Email ID </label>
		        <div class="col-xs-10">
		            <input type="text" class="form-control" name="ag_email" id="ag_email"  >
		        </div>
		    </div>

		    <div class="form-group">
		        <label for="inputEmail" class="control-label col-xs-2">RTO </label>
		        <div class="col-xs-10">
		        <select class="form-control" name="rto_id" id="rto_id">
		           <option  > SELECT --</option>
		           @foreach($agent_m as $val)
									 <option value="{{$val->id}}">{{$val->series_no}}</option>           
					 @endforeach

				</select>
		            
		        </div>
		    </div>


		    
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="agent_add_id">Save changes</button>
      </div>
    </div>
  </div>
</div>


 



@endsection		

 