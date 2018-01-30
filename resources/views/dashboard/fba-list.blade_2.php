					@extends('include.master')
					@section('content')
					        

					          <!-- Body Content Start ---->
					            <div id="content" style="overflow:scroll;">
								 <div class="container-fluid white-bg">
								 <div class="col-md-12"><h3 class="mrg-btm">FBA List</h3></div>
								 
								  
								 
								 <!-- Date Start -->
								 <div class="col-md-4">
								<div class="form-group">
								   
					                <p>From Date</p>
								   <div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
					               <input class="form-control" type="text" placeholder="From Date" id="min" />
					              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
					              </div>
					            </div>
					           </div>
							   <div class="col-md-4">
								 <div class="form-group">
								 <p>To Date</p>
								   <div id="datepicker1" class="input-group date" data-date-format="mm-dd-yyyy">
					               <input class="form-control" type="text" placeholder="From Date" id="max" />
					              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
					              </div>
					            </div>
					           </div>
							 <!--   <div class="col-md-4">
							   <div class="form-group"> <button class="common-btn mrg-top">SHOW</button></div>
							   </div> -->
							   <!-- Date End -->
							   
								 <div class="col-md-12">
								 <div class="overflow-scroll">
								 <div class="table-responsive" >
									<table class="datatable-responsive table table-striped table-bordered dt-responsive nowrap" id="example">
					                 <thead>
					                  <tr>
					                   <th>Full Name</th>
					                   <th>Created Date</th>
					                   <th>Mobile No</th>
					                   <th>Email ID</th>
									   <th></th>
									   <th>Password</th>
					                   <th>City</th>
									   <th>Pincode</th>
					                   <th>FSM Details</th>
					                   <th>POSP No</th>
									   
									    
					                 </tr>
					                </thead>
					                <tbody>
					                 <tr>
					                  <td>LAKHINANDAN SHARMA</td>
					                  <td>01-25-2018</td>
					                  <td>9954429253</td>
					                  <td>lakhinandanlicisssssssssssss@gmail.com</td>
									  <td><a href="#" data-toggle="modal" data-target="#paymentLink">payment Link</a></td>
									  <td><a href="#" data-toggle="modal" data-target="#showPassword">*****</a></td>
					                  <td>DIBRUGARH</td>
									  <td>Pincode</td>
					                  <td><a href="#" data-toggle="modal" data-target="#fsmDetails">FSM</a></td>
					                  <td>dgdg</td>
					                  </tr>


					                   <tr>
					                  <td>LAKHINANDAN SHARMA</td>
					                  <td>01-25-2018</td>
					                  <td>9954429253</td>
					                  <td>lakhinandanlicisssssssssssss@gmail.com</td>
									  <td><a href="#" data-toggle="modal" data-target="#paymentLink">payment Link</a></td>
									  <td><a href="#" data-toggle="modal" data-target="#showPassword">*****</a></td>
					                  <td>DIBRUGARH</td>
									  <td>Pincode</td>
					                  <td><a href="#" data-toggle="modal" data-target="#fsmDetails">FSM</a></td>
					                  <td>dgdg</td>
					                  </tr>




					                   <tr>
					                  <td>LAKHINANDAN SHARMA</td>
					                  <td>01-25-2018</td>
					                  <td>9954429253</td>
					                  <td>lakhinandanlicisssssssssssss@gmail.com</td>
									  <td><a href="#" data-toggle="modal" data-target="#paymentLink">payment Link</a></td>
									  <td><a href="#" data-toggle="modal" data-target="#showPassword">*****</a></td>
					                  <td>DIBRUGARH</td>
									  <td>Pincode</td>
					                  <td><a href="#" data-toggle="modal" data-target="#fsmDetails">FSM</a></td>
					                  <td>dgdg</td>
					                  </tr>
					               
					               
					             </tbody>
					            </table>
								</div>
								</div>
								
								 
								</div>
								
					            </div>
					            </div>
								<!-- Body Content Start ---->
								



					@endsection		

 