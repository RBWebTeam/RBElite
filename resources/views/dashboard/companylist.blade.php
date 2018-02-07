@extends('include.master')
@section('content')
    

					          <!-- Body Content Start ---->
					            <div id="content" style="overflow:scroll;">
								 <div class="container-fluid white-bg">
								 <div class="col-md-12"><h3 class="mrg-btm">Company-master</h3></div>
								 
								  
								 
								 <!-- Date Start -->
								<div class="col-md-4">
								<div class="form-group">
					                <p><a href="#"  class="btn btn-default btn-sm"  data-toggle="modal" data-target="#company_modal" > <span class="glyphicon glyphicon-plus"></span> Product Company   </a></p>
					            </div>
					           </div>
							  
							   
								 <div class="col-md-12">
								 <div class="overflow-scroll">
								 <div class="table-responsive" >
									<table class="datatable-responsive table table-striped table-bordered dt-responsive nowrap" id="example">
					                 <thead>
					                  <tr>
					                    <th>ID</th>
					                    <th>Category  Name</th>
                                        <th>contact_person</th>
                                        <th>contact_no</th>
                                        <th>email</th>
                                        <th>company_id</th>
                                        <th>logo</th>
                                        <th>date</th>
                                        <th>ip</th>
                                        <th>user_id</th>
                                        <th>Edit</th>


					                 </tr>
					                </thead>
					                <tbody>
					               @foreach($company_master as $key=> $val)
					                 <tr>
					                  <td class="com_id">{{$val->id}} </td>
					                  <td class="name">{{$val->name}} </td>
					                  <td class="contact_person">{{$val->contact_person}} </td>
					                  <td class="number">{{$val->contact_no}} </td>
					                  <td class="email">{{$val->email}} </td>
					                  <td class="company_id">{{$val->company_id}} </td>
					                  <td class="logo"><img src="{{url('images/upload')}}/{{$val->logo}}" height="100" width="100"> </td>
					                  <td>{{$val->created_at}} </td>
					                  <td>{{$val->ip}} </td>
					                  <td>{{$val->user_id}} </td>
					                  <td><i style="color: #2980B9" class="fas fa-edit"></i><a href="#" data-toggle="modal" class="edit" data-target="#company_edit"> Edit</a></td>
					                    
					                 
					                  </tr>
					                @endforeach
					               
					             </tbody>
					            </table>
								</div>
								</div>
								
								 
								</div>
								
					            </div>
					            </div>
 

@endsection		


<div class="modal fade" id="company_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Company  ADD</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" method="post"  id="company_master_form" > {{ csrf_field() }}
		    <div class="form-group">
		        <label for="inputEmail" class="control-label col-xs-3">Company Name  </label>
		        <div class="col-xs-8">
		            <input type="text" class="form-control" name="name" >
		            <span id="name_cat" class="help-inline"></span>
		        </div>
		    </div>

		    <div class="form-group">
		        <label for="inputEmail" class="control-label col-xs-3">Contact Person  </label>
		        <div class="col-xs-8">
		            <input type="text" class="form-control" name="contact_person" id="contact_person"  >
		            <span id="cont_per_cat" class="help-inline"></span>
		        </div>
		    </div>

		    <div class="form-group">
		        <label for="inputEmail" class="control-label col-xs-3">contact no  </label>
		        <div class="col-xs-8">
		            <input type="text" class="form-control" name="contact" id="contact"  >
		            <span id="contact_no_err" class="help-inline"></span>
		        </div>
		    </div>

		     <div class="form-group">
		        <label for="inputEmail" class="control-label col-xs-3">email ID </label>
		        <div class="col-xs-8">
		            <input type="text" class="form-control" name="email" id="email"  >
		            <span id="email_error" class="help-inline"></span>
		        </div>
		    </div>

		     

		     <div class="form-group">
		        <label for="inputEmail" class="control-label col-xs-3">Logo</label>
		        <div class="col-xs-8">
		            <input type="file" class="form-control" name="logo" id="logo"  >
		            <span id="logo_erorr" class="help-inline"></span>
		        </div>
		    </div>

      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="company_master_id">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="company_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Company</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" method="post"  id="company_edit_form" enctype="multipart/form-data" > 
      {{ csrf_field() }}
      <input type="hidden" name="c_id" class="c_id">
		    <div class="form-group">
		     
		        <label for="company_nm" class="control-label col-xs-3">Company Name</label>
		        <div class="col-xs-8">
		            <input type="text" class="form-control company_nm" name="company_nm">
		        </div>
		    </div>
		    <div class="form-group">
		        <label for="contact_person" class="control-label col-xs-3">Contact Person</label>
		        <div class="col-xs-8">
		            <input type="text" class="form-control contact_person" name="contact_person">
		        </div>
		    </div>
		    <div class="form-group">
		        <label for="contact_no" class="control-label col-xs-3">Contact Number</label>
		        <div class="col-xs-8">
		            <input type="text" class="form-control contact_no" name="contact_no">
		        </div>
		    </div>
		    <div class="form-group">
		        <label for="email_id" class="control-label col-xs-3">Email ID</label>
		        <div class="col-xs-8">
		            <input type="text" class="form-control email_id" name="email_id">
		        </div>
		    </div>
		    <div class="form-group">
		        <label for="company_id" class="control-label col-xs-3">Company ID</label>
		        <div class="col-xs-8">
		            <input type="text" class="form-control company_id" name="company_id">
		        </div>
		    </div>
		    <div class="form-group">
		        <label for="inputEmail" class="control-label col-xs-3">Logo</label>
		        <div class="col-xs-8">
		            <img src="" class=" logo">
		        </div>
		    </div>
		    <div class="form-group">
		        <label for="inputEmail" class="control-label col-xs-3">Upload Logo</label>
		        <div class="col-xs-8">
		            <input type="file" name="new_logo">
		        </div>
		    </div>
		    


      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="company_edit">Save changes</button>
      </div>
    </div>
  </div>
</div>

 