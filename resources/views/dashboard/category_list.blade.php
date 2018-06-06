@extends('include.master')
@section('content')
    

					          <!-- Body Content Start ---->
					            <div id="content" style="overflow:scroll;">
								 <div class="container-fluid white-bg">
								 <div class="col-md-12"><h3 class="mrg-btm">Category and Subcategory</h3></div>

								 
								  
								 
								 <!-- Date Start -->
								<div class="col-md-4">
								<div class="form-group">
					                <p> <a href="#" class="btn btn-default btn-sm"    data-toggle="modal" data-target="#exampleModal"> <span class="glyphicon glyphicon-plus"></span> Category  </a> </p>
					            </div>
					           </div>
							  
							   
								 <div class="col-md-12">
								 <div class="overflow-scroll">
								 <div class="table-responsive" >
									<table class="datatable-responsive table table-striped table-bordered dt-responsive nowrap" id="example1">
					                 <thead>
					                  <tr>
					                  
					                   <th>Category  Name</th>
                                        <th>Subcategory  </th>


					                 </tr>
					                </thead>
					                <tbody>
					               @foreach($query as $key=> $val)
					                 <tr>
					                 
					                  <td>  {{$val->name}}  </td>
					                   <td>  <span class="glyphicon glyphicon-hand-right"></span> <a href="#" onclick="sub_cat_fn({{$val->id}});"> <i class="fa fa-eye" aria-hidden="true">Subcategory</i>  </a> </td>
					                 
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
								


						


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Category ADD</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" method="post"  id="category_add_id_from" > {{ csrf_field() }}
									    <div class="form-group">
									        <label for="inputEmail" class="control-label col-xs-2">category  </label>
									        <div class="col-xs-10">
									            <input type="text" class="form-control" name="name" id="name"  >
									        </div>
									    </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="category_add_id">Save changes</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="subcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Subcategory Show</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form     id="add_sub_catid_from" > {{ csrf_field() }}
              <input type="hidden" name="p_id" id="p_id" >
              <div class="form-group">
				<div class="row">
		          <div class="col-8 col-sm-6">
		           <input type="text" class="form-control" name="name" id="name"  >
		          </div>
		          <div class="col-4 col-sm-6">
		             <button type="button" class="btn btn-primary" id="add_sub_cat">ADD</button>
		          </div>
		        </div>
             </div>
        </form>						       
          <div class="table-responsive" >
			<table class="datatable-responsive table table-striped table-bordered dt-responsive nowrap" id="example">
                 <thead><tr> <th>Name</th> </tr></thead>
                 <tbody id="sub_cat_id"> </tbody>
            </table>
		   </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 
      </div>
    </div>
  </div>
</div>
@endsection		

 