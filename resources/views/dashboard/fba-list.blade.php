					@extends('include.master')
					@section('content')
					        

					          <!-- Body Content Start ---->
					            <div id="content" style="overflow:scroll;">
								 <div class="container-fluid white-bg">
								 <div class="col-md-12"><h3 class="mrg-btm">FBA List</h3></div>
								 
								 
								 <!-- Filter Strat -->
								 <div class="col-md-12">
								 <div class="panel panel-primary">
								 <div class="panel-heading">
											<h3 class="panel-title">Filter</h3>
											<div class="pull-right">
												<span class="clickable filter" data-toggle="tooltip" data-container="body">
												<span class="glyphicon glyphicon-plus glyphicon1"></span> &nbsp;&nbsp;
													<span class="glyphicon glyphicon-filter glyphicon1 fltr-tog"></span>
												</span>
											</div>
										</div>
										<div class="panel-body filter-bdy" style="display:none">
											<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Search..." />
										</div>
								 </div>
								 </div>
								 <!-- Filter End -->
								 
								 <!-- Date Start -->
								 <div class="col-md-4">
								<div class="form-group">
								   
					                <p>From Date</p>
								   <div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
					               <input class="form-control" type="text" placeholder="From Date" />
					              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
					              </div>
					            </div>
					           </div>
							   <div class="col-md-4">
								 <div class="form-group">
								 <p>To Date</p>
								   <div id="datepicker1" class="input-group date" data-date-format="mm-dd-yyyy">
					               <input class="form-control" type="text" placeholder="From Date" />
					              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
					              </div>
					            </div>
					           </div>
							   <div class="col-md-4">
							   <div class="form-group"> <button class="common-btn mrg-top">SHOW</button></div>
							   </div>
							   <!-- Date End -->
							   
								 <div class="col-md-12">
								 <div class="overflow-scroll">
								 <div class="table-responsive" >
									<table class="table table-bordered table-striped tbl" >
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
									   
									   <th>Loan ID</th>
					                   <th>Posp Name</th>
					                   <th>Partner Info</th>
					                   <th>Documents</th>
									   
									   <th>Bank Account</th>
									   <th>SMS</th>
					                 </tr>
					                </thead>
					                <tbody>
					                 <tr>
					                  <td>LAKHINANDAN SHARMA</td>
					                  <td>16 Jan 2017</td>
					                  <td>9954429253</td>
					                  <td>lakhinandanlicisssssssssssss@gmail.com</td>
									  <td><a href="#" data-toggle="modal" data-target="#paymentLink">payment Link</a></td>
									  <td><a href="#" data-toggle="modal" data-target="#showPassword">*****</a></td>
					                  <td>DIBRUGARH</td>
									  <td>Pincode</td>
					                  <td><a href="#" data-toggle="modal" data-target="#fsmDetails">FSM</a></td>
					                  <td>dgdg</td>
									  
									  <td><a href="#" data-toggle="modal" data-target="#updatePosp">UPDATE</a></td>
					                  <td>Durgapratap Rajbhar</td>
					                  <td><a href="#" data-toggle="modal" data-target="#partnerInfo">Partner Info</a></td>
					                  <td><a href="#">Pending</a></td>
									  <td>No</td>
									  <td><a href="#" data-toggle="modal" data-target="#sendSms"><span class="glyphicon glyphicon-envelope center-obj"></span></a></td>
					                  </tr>
					               
					               
					             </tbody>
					            </table>
								</div>
								</div>
								
								<h5 class="pull-left"><b>Records :</b> <span>1 to 10 </span>Of <span class="badge">186</span><h5>
								<ul class="pagination pull-right">
					              <li><a href="#">1</a></li>
					              <li><a href="#">2</a></li>
					              <li><a href="#">3</a></li>
					              <li><a href="#">4</a></li>
					              <li><a href="#">5</a></li>
					            </ul>
								</div>
								
					            </div>
					            </div>
								<!-- Body Content Start ---->
								



					@endsection		

<script type="text/javascript">
	

	$(document).ready(function() {
          $('#example').DataTable( {
          "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
          } );
          } );
          $('.popover-Payment').popover({
            trigger: 'focus'
          });

           $('.popover-Password').popover({
            trigger: 'focus'
          });


            
            
             function Sales_Code() {
              console.log('something');
             }
             
             function SMS_FN(id,mb){
                  $('.Mobile_ID').val(mb);
                  $('#fba_id').val(id);
                  $('.sms_sent_id').modal('show');
             }

             function POSP_UPDATE(id){
                            
                       $('#flage_id').val(1);
                       $('#fba_id_posp').val(id);
                       $('.updatePosp').modal('show');
                    
             }

             function LoanID_UPDATE(id){
                       $('#flage_id').val(2);
                       $('#fba_id_posp').val(id);
                       $('.updatePosp').modal('show');

             }
          
                                   // Sent sms popup
            $('.message_sms_id').click(function(event){  event.preventDefault();
                       var sms=$('.sms_id').val();
                                
                          if(sms){
                              $.post('/fba-list/sms', $('#message_sms_id').serialize())
                               .done(function(msg){ 
                                  //{ message: 'SMS Sent', status: 'success', statusId: 0 }
                                      if(msg.statusId==0){
                                         $('#strong_id').html('<strong>Success!</strong> SMS Sent successful..');
                                      }
                                   console.log(msg);
                               }).fail(function(xhr, status, error) {
                               console.log(error);
                               });
                          }else{
                              alert("abc..");
                          }
            });
                                           // POSP UPADTE MODEL
             $('.posp_from_id').click(function(event){  event.preventDefault();
                       var sms=$('#posp_name_id').val();
                                 
                          if(sms){
                              $.post('/fba-list/posp-update', $('#posp_from_id').serialize())
                               .done(function(msg){ 
                                              if(msg.status==0){
                                                                    
                                                                   $('#strong_lead').html('<strong>Success!</strong>  update..');
                                                                    if($('#flage_id').val()==1){
                                                                    fba_id_posp=$('#fba_id_posp').val();
                                                                    $('#'+fba_id_posp).empty();
                                                                    $('#'+fba_id_posp).append($('#posp_name_id').val());
                                                                    }if($('#flage_id').val()==2){
                                                                         //LoanID

                                                                    fba_id_posp=$('#fba_id_posp').val();
                                                                      alert(fba_id_posp);
                                                                     $('#LoanID'+fba_id_posp).empty();
                                                                     $('#LoanID'+fba_id_posp).append($('#posp_name_id').val());
                                                                    }
                                                   

                                                        setTimeout(function () {
                                                             $( '#posp_from_id' ).each(function(){
                                                                this.reset();
                                                            }); 
                                                                       
                                                                   
                                                            $('.updatePosp').modal('hide');
                                                            $('#strong_lead').empty();
                                                    },1000);
                                                
                                              }
                                   
                               }).fail(function(xhr, status, error) {
                               console.log(error);
                               });
                          }else{
                              alert("abc..");
                          }
            })

         
                
                                    // Extend dataTables search
                     
               
                $(document).ready(function(){
                  $.fn.dataTable.ext.search.push(
                  function (settings, data, dataIndex) {
                      var min = $('#min').datepicker("getDate");
                      var max = $('#max').datepicker("getDate");
                      var startDate = new Date(data[1]);
                      if (min == null && max == null) { return true; }
                      if (min == null && startDate <= max) { return true;}
                      if(max == null && startDate >= min) {return true;}
                      if (startDate <= max && startDate >= min) { return true; }
                      return false;
                  }
                  );

                
                      $("#min").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
                      $("#max").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
                      var table = $('#example').DataTable();

                      // Event listener to the two range filtering inputs to redraw on input
                      $('#min, #max').change(function () {
                          table.draw();
                      });
                  });
</script>