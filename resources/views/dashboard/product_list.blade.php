@extends('include.master')
@section('content')
    

					          <!-- Body Content Start ---->
					            <div id="content" style="overflow:scroll;">
								 <div class="container-fluid white-bg">
								 <div class="col-md-12"><h3 class="mrg-btm">Product List</h3></div>
								 
								  
								 
								 <!-- Date Start -->
								<div class="col-md-4">
								<div class="form-group">
					                <p><a href="product-add">ADD</a></p>
					            </div>
					           </div>
							  
							   
								 <div class="col-md-12">
								 <div class="overflow-scroll">
								 <div class="table-responsive" >
									<table class="datatable-responsive table table-striped table-bordered dt-responsive nowrap" id="example">
					                 <thead>
					                  <tr>
					                   <th>ID</th>
					                   <th>Name</th>

					                 </tr>
					                </thead>
					                <tbody>
					               @foreach($product_master as $key=> $val)
					                 <tr>
					                  <td>{{$key}}</td>
					                  <td>{{$val->name}}</td>
					                 
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

 