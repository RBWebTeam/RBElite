@extends('include.master')
@section('content')
    

					          <!-- Body Content Start ---->
					            <div id="content" style="overflow:scroll;">
								 <div class="container-fluid white-bg">
								 <div class="col-md-12"><h3 class="mrg-btm">Product List</h3></div>
								 
								  
								 
								 <!-- Date Start -->
								<div class="col-md-4">
								<div class="form-group">
					                <p><a href="product-add" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-plus"></span> Product </a>   </p>

					            </div>
					           </div>
							  
							   
								 <div class="col-md-12">
								 <div class="overflow-scroll">
								 <div class="table-responsive" >
									<table class="datatable-responsive table table-striped table-bordered dt-responsive nowrap" id="example">
					                 <thead>
					                  <tr>
					                  
					                   <th>Name</th>
					                   <th>Category</th>
					                    <th>Sub Category</th>
					                    <th>Charges</th>
					                    <th>Agent Commision</th>
					                     <th>Documents Required</th>
					                      <th>Company Name</th>
					                       <th>Logo</th>
					                   

					                 </tr>
					                </thead>
					                <tbody>
						               @foreach($product_master as $key=> $val)
						                 <tr>
						                  
						                  <td>{{$val->productname}}</td>
						                   <td>{{$val->rtoname}}</td>
						                    <td>{{$val->subcategory}}</td>
						                  <td>{{$val->charges}}</td>
						                  <td>{{$val->agent_commision}}</td>
						                   <td>{{$val->required_field}}</td>
						                    <td>{{$val->company_name}}</td>
						                   <td>{{$val->product_logo}}</td>		
						                 
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
								



@endsection		

 