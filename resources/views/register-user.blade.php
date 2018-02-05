@extends('include.master')
@section('content')
            

             <div class="container-fluid white-bg">
				<div class="col-md-12"><h3 class="mrg-btm">REGISTER USER</h3></div>
				<form method="post" action="submit-query.html">
                <div class="col-md-4 col-xs-12">
				<div class="form-group">
				<input type="text" class="form-control" placeholder="Username" />
				</div>
				</div>
				
				<div class="col-md-4 col-xs-12">
				<div class="form-group">
				<input type="email" class="form-control" placeholder="Email Id"/>
				</div>
				</div>
				
				<div class="col-md-4 col-xs-12">
				<div class="form-group">
				<input type="password" class="form-control" placeholder="Password"/>
				</div>
				</div>
				
				<div class="col-md-4 col-xs-12">
				<div class="form-group">
				<input type="password" class="form-control"placeholder="Confirm Password" />
				</div>
				</div>
				
			
				
				<div class="col-md-4 col-xs-12">
				<div class="form-group">
				<select class="selectpicker select-opt form-control" required>
				 <option value="1">Authorities</option>
								<option value="1">SUB CATEGORIES</option>
								<option value="2">HEALTH INSURANCE</option>
								<option value="3">MOTOR INSURANCE</option>
								<option value="4">TRAVEL INSURANCE</option>
								<option value="5">HOME LOAN</option>
								<option value="6">PERSONAL LOAN</option>
								<option value="7">LOAN AGAINST PROPERTY</option>
				</select>
				</div>
				</div>
				
				
				<div class="form-group">
                    <div class="col-xs-12 form-padding top-lead">
                            <div class="col-sm-6 col-xs-12 form-padding" id="AuthorityV" style="overflow-y:scroll;height:270px;">
							<div>
	<table class="table table-responsive table-hover reg-tabl" cellspacing="0">
		                                       <tbody>
		                                         <tr class="headerstyle" align="center">
			                                    <th scope="col">
                                                <input type="checkbox" class="used" style="width: auto; float: left; display: inline-block; margin-right: 16px;">
                                                <span>AUTHORITIES</span>
                                               </th>
		                                       </tr>
		
		                                   <tr align="left tr-css">
			                                  <td>
                                                <input type="hidden" value="20" class="used">
                                                <input type="checkbox" class="used">
                                                <span>FSM DETAILS</</span>
                                            </td>
		                                   </tr>
		                                   <tr align="left tr-css">
			                                  <td>
                                                <input type="hidden" value="20" class="used">
                                                <input type="checkbox" class="used">
                                                <span>LEAD DEATILS</</span>
                                            </td>
		                                   </tr>
		                                    <tr align="left tr-css">
			                                  <td>
                                                <input type="hidden" value="20" class="used">
                                                <input type="checkbox" class="used">
                                                <span>OFFLINE QUOTE REQUESTS</</span>
                                            </td>
		                                   </tr>
		                                    <tr align="left tr-css">
			                                  <td>
                                                <input type="hidden" value="20" class="used">
                                                <input type="checkbox" class="used">
                                                <span>OD-DISCOUNT GRID</</span>
                                            </td>
		                                   </tr>
		                                     <tr align="left tr-css">
			                                  <td>
                                                <input type="hidden" value="20" class="used">
                                                <input type="checkbox" class="used">
                                                <span>OD-DISCOUNT UPLOAD</</span>
                                            </td>
		                                   </tr>
		                                     <tr align="left tr-css">
			                                  <td>
                                                <input type="hidden" value="20" class="used">
                                                <input type="checkbox" class="used">
                                                <span>AOD-DISCOUNT DETAILS</</span>
                                            </td>
		                                   </tr>
		                                     <tr align="left tr-css">
			                                  <td>
                                                <input type="hidden" value="20" class="used">
                                                <input type="checkbox" class="used">
                                                <span>LOGIN REQUEST LOG</</span>
                                            </td>
		                                   </tr>
		                                    <tr align="left tr-css">
			                                  <td>
                                                <input type="hidden" value="20" class="used">
                                                <input type="checkbox" class="used">
                                                <span>SEND SMS</</span>
                                            </td>
		                                   </tr>
		                                    <tr align="left tr-css">
			                                  <td>
                                                <input type="hidden" value="20" class="used">
                                                <input type="checkbox" class="used">
                                                <span>VEHICLE SEGMENT MAPPING</</span>
                                            </td>
		                                   </tr>                             
		                                   <tr align="left tr-css">
			                                  <td>
                                                <input type="hidden" value="20" class="used">
                                                <input type="checkbox" class="used">
                                                <span>ADD-ON MOST</</span>
                                            </td>
		                                   </tr>
		                                   <tr align="left tr-css">
			                                  <td>
                                                <input type="hidden" value="20" class="used">
                                                <input type="checkbox" class="used">
                                                <span>SUBMIT QUERY</</span>
                                            </td>
		                                   </tr>
		                                   <tr align="left tr-css">
			                                  <td>
                                                <input type="hidden" value="20" class="used">
                                                <input type="checkbox" class="used">
                                                <span>USER QUERIES</</span>
                                            </td>
		                                   </tr>
                                          <tr align="left tr-css">
			                                  <td>
                                                <input type="hidden" value="20" class="used">
                                                <input type="checkbox" class="used">
                                                <span>USER FEEDBACK</</span>
                                            </td>
		                                   </tr>
		                                    <tr align="left tr-css">
			                                  <td>
                                                <input type="hidden" value="20" class="used">
                                                <input type="checkbox" class="used">
                                                <span>SEND NOTIFICATION</</span>
                                            </td>
		                                   </tr>
		                                    <tr align="left tr-css">
			                                  <td>
                                                <input type="hidden" value="20" class="used">
                                                <input type="checkbox" class="used">
                                                <span>DEMO USER DETAILS </</span>
                                            </td>
		                                   </tr>
		                                    <tr align="left tr-css">
			                                  <td>
                                                <input type="hidden" value="20" class="used">
                                                <input type="checkbox" class="used">
                                                <span>CREDIT DEMO LOGIN</</span>
                                            </td>
		                                   </tr>
		                                    <tr align="left tr-css">
			                                  <td>
                                                <input type="hidden" value="20" class="used">
                                                <input type="checkbox" class="used">
                                                <span>FBA LIST</</span>
                                            </td>
		                                   </tr>
		                                     <tr align="left tr-css">
			                                  <td>
                                                <input type="hidden" value="20" class="used">
                                                <input type="checkbox" class="used">
                                                <span>CUSTOMERID VALIDATION</</span>
                                            </td>
		                                   </tr>
		                                     <tr align="left tr-css">
			                                  <td>
                                                <input type="hidden" value="20" class="used">
                                                <input type="checkbox" class="used">
                                                <span>UN-ASSIGNED LEADS</</span>
                                            </td>
		                                   </tr>
		                                    <tr align="left tr-css">
			                                  <td>
                                                <input type="hidden" value="20" class="used">
                                                <input type="checkbox" class="used">
                                                <span>DRILL DOWN REPORT</</span>
                                            </td>
		                                   </tr>
											<tr align="left tr-css">
			                                  <td>
                                                <input type="hidden" value="20" class="used">
                                                <input type="checkbox" class="used">
                                                <span>REWARD POINT DETAILS</</span>
                                            </td>
		                                   </tr>
											<tr align="left tr-css">
			                                  <td>
                                                <input type="hidden" value="20" class="used">
                                                <input type="checkbox" class="used">
                                                <span>PAYMENT HISTORY</span>
                                            </td>
		                                   </tr>
		                                     <tr align="left tr-css">
			                                  <td>
                                                <input type="hidden" value="20" class="used">
                                                <input type="checkbox" class="used">
                                                <span>REGISTER USER</span>
                                            </td>
		                                   </tr>
	</tbody></table>
</div>
                                
                                </div>

                        <div class="col-sm-6 col-xs-12 form-padding" id="StatesV" style="overflow-y:scroll;height:270px;">
							
                                              <div>
	                                          <table class="table table-responsive table-hover" cellspacing="0">
		                                       <tbody>
											   <tr class="headerstyle" align="center">
			                                    <th scope="col">
                                                <input  type="checkbox" class="used">
                                                <span>States</span>
                                                </th>
		                                       </tr>
											
		                                    <tr align="left">
			                               <td>
                                                <input type="hidden" value="4" class="used">
                                                <input  type="checkbox" class="used">
                                                <span>ANDAMAN-NICOBAR</span>
                                            </td>
		                                   </tr>
										   <tr align="left">
			                               <td>
                                                <input type="hidden" value="4" class="used">
                                                <input  type="checkbox" class="used">
                                                <span>ANDHRA PRADESH</span>
                                            </td>
		                                   </tr>
		                                    
											<tr align="left">
			                               <td>
                                                <input type="hidden" value="4" class="used">
                                                <input  type="checkbox" class="used">
                                                <span>ARUNACHAL PRADESH</span>
                                            </td>
		                                   </tr>
		                                   <tr align="left">
			                               <td>
                                                <input type="hidden" value="4" class="used">
                                                <input  type="checkbox" class="used">
                                                <span>ASSAM</span>
                                            </td>
		                                   </tr>
		                                   <tr align="left">
			                               <td>
                                                <input type="hidden" value="5" class="used">
                                                <input type="checkbox" class="used">
                                                <span id="Body_gvStateList_lblVals_4">BIHAR</span>
                                            </td>
		                                   </tr>
		                                  <tr align="left">
			                               <td>
                                                <input type="hidden" value="6" class="used">
                                                <input type="checkbox" class="used">
                                                <span>CHANDIGARH</span>
                                            </td>
		                                   </tr>
		                                    <tr align="left">
			                                 <td>
                                                <input type="hidden" value="7" class="used">
                                                <input type="checkbox">
                                                <span>CHHATTISGARH</span>
                                            </td>
		                                   </tr>
		                                  <tr align="left">
			                              <td>   
                                             <input type="hidden" value="8" class="used">
                                                <input type="checkbox" class="used">
                                                <span>DADRA &amp; NAGAR HAVELI</span>
                                            </td>
		                                   </tr>
		                                   <tr align="left">
			                               <td>
                                                <input type="hidden" value="9" class="used">
                                                <input type="checkbox" class="used">
                                                <span>DAMAN &amp; DIU</span>
                                            </td>
		                                  </tr>
		                                  <tr align="left">
			                              <td>
                                                <input type="hidden" value="10" class="used">
                                                <input type="checkbox" class="used">
                                                <span>DELHI</span>
                                            </td>
		                                  </tr>
		                                  <tr align="left">
			                               <td>
                                                <input type="hidden" value="11" class="used">
                                                <input  type="checkbox" class="used">
                                                <span>GOA</span>
                                            </td>
		                                    </tr>
		                                   
										   <tr align="left">
			                               <td>
                                                <input type="hidden" value="13" class="used">
                                                <input type="checkbox" class="used">
                                                <span>GUJARAT</span>
                                            </td>
		                                    </tr>
		                                   <tr align="left">
			                               <td>
                                                <input type="hidden" value="13" class="used">
                                                <input type="checkbox" class="used">
                                                <span>HARYANA</span>
                                            </td>
		                                    </tr>
		                                    <tr align="left">
			                                  <td>
                                                <input type="hidden" value="14" class="used">
                                                <input type="checkbox" class="used">
                                                <span>HIMACHAL PRADESH</span>
                                            </td>
		                                   </tr>
		                                   <tr align="left">
			                                <td>
                                                <input type="hidden" value="15" class="used">
                                                <input  type="checkbox" class="used">
                                                <span>JAMMU KASHMIR</span>
                                            </td>
		                                    </tr>
		                                   <tr align="left">
			                               <td>
                                                <input type="hidden" value="16" class="used">
                                                <input type="checkbox" class="used">
                                                <span id="Body_gvStateList_lblVals_15">JHARKHAND</span>
                                            </td>
		                                    </tr>
		                                     <tr align="left">
			                                 <td>
                                                <input type="hidden" value="17" class="used">
                                                <input type="checkbox" class="used">
                                                <span>KARNATAKA</span>
                                            </td>
		                                    </tr>
		                                     <tr align="left">
			                                  <td>
                                                <input type="hidden" value="18" class="used">
                                                <input type="checkbox" class="used">
                                                <span>KERALA</span>
                                            </td>
		                                    </tr>
											<tr align="left">
			                                  <td>
                                                <input type="hidden" value="18" class="used">
                                                <input type="checkbox" class="used">
                                                <span>LAKSHADWEEP</span>
                                            </td>
		                                    </tr>
											<tr align="left">
			                                  <td>
                                                <input type="hidden" value="18" class="used">
                                                <input type="checkbox" class="used">
                                                <span>MADHYA PRADESH</span>
                                            </td>
		                                    </tr>
											<tr align="left">
			                                  <td>
                                                <input type="hidden" value="18" class="used">
                                                <input type="checkbox" class="used">
                                                <span>MAHARASHTRA</span>
                                            </td>
		                                    </tr>
											<tr align="left">
			                                  <td>
                                                <input type="hidden" value="18" class="used">
                                                <input type="checkbox" class="used">
                                                <span>MANIPUR</span>
                                            </td>
		                                    </tr>
											<tr align="left">
			                                  <td>
                                                <input type="hidden" value="18" class="used">
                                                <input type="checkbox" class="used">
                                                <span>MEGHALAYA</span>
                                            </td>
		                                    </tr>
											<tr align="left">
			                                  <td>
                                                <input type="hidden" value="18" class="used">
                                                <input type="checkbox" class="used">
                                                <span>MIZORAM</span>
                                            </td>
		                                    </tr>
											<tr align="left">
			                                  <td>
                                                <input type="hidden" value="18" class="used">
                                                <input type="checkbox" class="used">
                                                <span>NAGALAND</span>
                                            </td>
		                                    </tr>
											<tr align="left">
			                                  <td>
                                                <input type="hidden" value="18" class="used">
                                                <input type="checkbox" class="used">
                                                <span>ORISSA</span>
                                            </td>
		                                    </tr>
											<tr align="left">
			                                  <td>
                                                <input type="hidden" value="18" class="used">
                                                <input type="checkbox" class="used">
                                                <span>PONDICHERRY</span>
                                            </td>
		                                    </tr>
											<tr align="left">
			                                  <td>
                                                <input type="hidden" value="18" class="used">
                                                <input type="checkbox" class="used">
                                                <span>PUNJAB</span>
                                            </td>
		                                    </tr>
											<tr align="left">
			                                  <td>
                                                <input type="hidden" value="18" class="used">
                                                <input type="checkbox" class="used">
                                                <span>RAJASTHAN</span>
                                            </td>
		                                    </tr>
											<tr align="left">
			                                  <td>
                                                <input type="hidden" value="18" class="used">
                                                <input type="checkbox" class="used">
                                                <span>SIKKIM</span>
                                            </td>
		                                    </tr>
											<tr align="left">
			                                  <td>
                                                <input type="hidden" value="18" class="used">
                                                <input type="checkbox" class="used">
                                                <span>TAMILNADU</span>
                                            </td>
		                                    </tr>
											<tr align="left">
			                                  <td>
                                                <input type="hidden" value="18" class="used">
                                                <input type="checkbox" class="used">
                                                <span>TELANGANA</span>
                                            </td>
		                                    </tr>
											<tr align="left">
			                                  <td>
                                                <input type="hidden" value="18" class="used">
                                                <input type="checkbox" class="used">
                                                <span>TRIPURA</span>
                                            </td>
		                                    </tr>
											<tr align="left">
			                                  <td>
                                                <input type="hidden" value="18" class="used">
                                                <input type="checkbox" class="used">
                                                <span>UTTAR PRADESH</span>
                                            </td>
		                                    </tr>
											<tr align="left">
			                                  <td>
                                                <input type="hidden" value="18" class="used">
                                                <input type="checkbox" class="used">
                                                <span>UTTARAKHAND</span>
                                            </td>
		                                    </tr>
											<tr align="left">
			                                  <td>
                                                <input type="hidden" value="18" class="used">
                                                <input type="checkbox" class="used">
                                                <span>WEST BENGAL</span>
                                            </td>
		                                    </tr>
	                                 </tbody>
									 </table>
                                     </div>
                                
                                </div>
                        </div>
                    </div>
				
				
				
			
				
				<div class="col-md-12 col-xs-12">
				<br>
				 <input type="submit" class="btn btn-default submit-btn border">
				</div>
				</form>
            </div>
					    
@endsection		
            