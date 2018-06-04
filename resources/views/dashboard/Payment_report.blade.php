@extends('include.master')
@section('content')
 <div id="content" style="overflow:scroll;">
	 <div class="container-fluid white-bg">
		<div class="col-md-12"><h3 class="mrg-btm">Report</h3></div>
      <div>
      	<div>
      		<a class="btn btn-primary" onclick="getreportdata(1)">Payment Done</a>
      		<a class="btn btn-primary" onclick="getreportdata(2)">Payment Pending</a>
      		<a class="btn btn-primary" onclick="getreportdata(3)">Unassigned Lead </a>
      		<a class="btn btn-primary" onclick="getreportdata(4)">Assigned Lead</a>	
      	</div>
      </div>
		<div class="col-md-12">
		    <div class="overflow-scroll" >
			<div class="table-responsive" >
				<div id="divrepo" style="display: none;">
				<table class="datatable-responsive table table-striped table-bordered dt-responsive nowrap" id="example">
					<thead>
					    <tr>					                  
					      <th>ID</th>
                          <th>Name</th>
                          <th>Product</th>
                          <th>status</th>
                          <th>quantity</th>
                          <th>Custmer Name</th>
                          <th>Rate</th>
                          <th>Agent Name</th>
                          <th>Payment Status</th>
                          <th>Transaction Id</th>
                          <th>Bank Name</th>
                          <th>Payment Remark</th>
                          <th>Payment Date</th>
                          <th>RTO Location</th>
                          <th>Created At</th>
                          <th>Updated At</th>
					    </tr>
					</thead>
					<tbody>
				    @isset($sales)
					@foreach($sales as $key=> $val)					
					<tr>
					 <td>{{$val->id}}</td>
					 <td>{{$val->name}}</td>
					 <td>{{$val->product}}</td>
					 <td>{{$val->status}}</td>
					 <td>{{$val->quantity}}</td>
					 <td>{{$val->customer}}</td>
					 <td>{{$val->rate}}</td>
					 <td>{{$val->agent}}</td>
					 <td>{{$val->payment_status}}</td>
					 <td>{{$val->transaction_id}}</td>
					 <td>{{$val->bank_name}}</td>					 
					 <td>{{$val->payment_remark}}</td>
					 <td>{{$val->payment_date}}</td>
					 <td>{{$val->rto_location}}</td>			                 
					 <td>{{$val->created_at}}</td>
					 <td>{{$val->updated_at}}</td>
					</tr> 
					@endforeach
					@endisset
					</tbody>
				</table>
				</div>
			</div>
			</div>						
		</div>
	 </div>
</div>
@endsection		 