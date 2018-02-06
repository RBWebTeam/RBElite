@extends('include.master')
@section('content')
    

					          <!-- Body Content Start ---->
					            <div id="content" style="overflow:scroll;">
								 <div class="container-fluid white-bg">
								 <div class="col-md-12"><h3 class="mrg-btm">Documents</h3></div>
								 
								  
								 
								 <!-- Date Start -->
								<div class="col-md-4">
								<div class="form-group">
					                <p><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#docs" >ADD</a></p>
					            </div>
					           </div>
							  
							   
								 <div class="col-md-12">
								 <div class="overflow-scroll">
								 <div class="table-responsive" >
									<table class="datatable-responsive table table-striped table-bordered dt-responsive nowrap" id="example">
					                 <thead>
					                  <tr>
					                    <th>ID</th>
                                       <th>Documents Required</th>
                                       <th>Edit</th>
                                     </tr>
					                </thead>
					                <tbody>
					               @foreach($docs as $key=> $val)
					                 <tr >
					                 
					                  <td class="doc_id"> {{$val->id}} </td>
					                  <td class="doc_field"> {{$val->required_field}} </td>
					                  <td><i style="color: #2980B9" class="fas fa-edit"></i><a href="#" data-toggle="modal" class="do_edit" data-target="#docs_edit"> Edit</a></td>
					                  
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


<div class="modal fade" id="docs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Documents</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" method="post"  id="documents_form" > 
      {{ csrf_field() }}
		    <div class="form-group">
		        <label for="inputEmail" class="control-label col-xs-3">Documents Name</label>
		        <div class="col-xs-8">
		            <input type="text" class="form-control" name="docs_name" required >
		            <span id="name_cat" class="help-inline"></span>
		        </div>
		    </div>

      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="documents">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="docs_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Documents</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" method="post"  id="documents_edit_form" > 
      {{ csrf_field() }}
		    <div class="form-group">
		        <label for="inputEmail" class="control-label col-xs-3">Documents Name</label>
		      <input type="hidden" name="docs_id" class="docs_id">
		        <div class="col-xs-8">
		            <textarea type="text" class="form-control docs_nm" name="docs_nm"  required></textarea> 
		        </div>
		    </div>

      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="documents_edit">Save changes</button>
      </div>
    </div>
  </div>
</div>

 