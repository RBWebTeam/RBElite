@extends('include.master')
@section('content')
    

					          <!-- Body Content Start ---->
					            <div id="content" style="overflow:scroll;">
								 <div class="container-fluid white-bg">
								 <div class="col-md-12"><h3 class="mrg-btm">RTO List</h3></div>

								 
								  
								 
								 <!-- Date Start -->
								<div class="col-md-4">
								<div class="form-group">
					                <p> <a href="#" class="btn btn-default btn-sm"    data-toggle="modal" data-target="#rto-Modal"> <span class="glyphicon glyphicon-plus"></span> RTO  </a> </p>
					            </div>
					           </div>
							  
							   
								 <div class="col-md-12">
								 <div class="overflow-scroll">
								 <div class="table-responsive" >
									<table class="datatable-responsive table table-striped table-bordered dt-responsive nowrap" id="example">
					                 <thead>
					                  <tr>
					                  
					                   <th>RTO location</th>
                                        <th>Series no  </th>


					                 </tr>
					                </thead>
					                <tbody>
					               
					                   @foreach($rto as $val)
					                    <tr>
					                    <td>{{$val->rto_location}}</td>
                                        <td>{{$val->series_no}}</td>
                                         </tr>
                                         @endforeach
                               
					               
					             </tbody>
					            </table>
								</div>
								</div>
								
								 
								</div>
								
					            </div>
					            </div>
								<!-- Body Content Start ---->
   
						


<div class="modal fade" id="rto-Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">RTO ADD</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" method="post"  id="rto_add_from" > {{ csrf_field() }}
		    <div class="form-group">
		        <label for="inputEmail" class="control-label col-xs-2">RTO location </label>
		        <div class="col-xs-10">
		          <textarea class="form-control" name="rto_location" id="rto_location"></textarea>
		             <span id="rto_vali_loca" class="help-inline"></span> 
		        </div>
		    </div>

		    <div class="form-group">
		        <label for="inputEmail" class="control-label col-xs-2"> Series no   </label>
		        <div class="col-xs-10">
		            <input type="text" class="form-control" name="series_no" id="series_no"  >
		             <span id="rto_vali_series" class="help-inline"></span>
		        </div>
		    </div>

		      

		  
        
             <div class="form-group">
		         <label for=" " class="control-label col-xs-2"> </label>
		        
		            <label   id="rto_valid_id" >    </label>
		        
		    </div>

		   
		    
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="rto_add_id">Save changes</button>
      </div>
    </div>
  </div>
</div>


 



@endsection		

 