@extends('include.master')
@section('content')
    

					          <!-- Body Content Start ---->
					            <div id="content" style="overflow:scroll;">
								 <div class="container-fluid white-bg">
								 <div class="col-md-12"><h3 class="mrg-btm">Product ADD</h3></div>
								 
								  
									 <form class="form-horizontal" method="post" action="{{url('product-save')}}"> {{ csrf_field() }}
									    <div class="form-group">
									        <label for="inputEmail" class="control-label col-xs-2">Product Name</label>
									        <div class="col-xs-10">
									            <input type="text" class="form-control" name="name" id="name"  >
									             @if ($errors->has('name'))<label class="control-label" for="inputError"> {{ $errors->first('name') }}</label>  @endif
									        </div>
									    </div>

									    <div class="form-group">
									        <label for="inputPassword" class="control-label col-xs-2">Category   </label>
									        <div class="col-xs-10">
									           <select class="form-control" name="category_id" id="category_id">
									            <option  > SELECT</option>
									            @foreach($query as $key=> $val)
												  <option value="{{$val->id}}">{{$val->name}}</option>
												 @endforeach
												</select>
									    @if ($errors->has('category_id'))<label class="control-label" for="inputError"> {{ $errors->first('category_id') }}</label>  @endif
									        </div>
									    </div>


									    <div class="form-group">
									        <label for="inputPassword" class="control-label col-xs-2"  id="Sub_Category_ID_hide">Sub Category   </label>
									        <div class="col-xs-10" id="Sub_Category_ID">
									           
									            
									        </div>
									    </div>
                                        


                                         <div class="form-group">
									        <label for="inputEmail" class="control-label col-xs-2">Charge</label>
									        <div class="col-xs-10">
									            <input type="text" class="form-control" name="charge" id="charge" onkeypress="return Numeric(event)" >
									       @if ($errors->has('charge'))<label class="control-label" for="inputError"> {{ $errors->first('charge') }}</label>  @endif
									        </div>
									    </div>


									    <div class="form-group">
									        <label for="inputEmail" class="control-label col-xs-2">Agent Commision</label>
									        <div class="col-xs-10">
									            <input type="text" class="form-control"  name="agent_commision"  onkeypress="return Numeric(event)">
									    @if ($errors->has('agent_commision'))<label class="control-label" for="inputError"> {{ $errors->first('agent_commision') }}</label>  @endif
									        </div>
									    </div>
 

                                         <div class="form-group">
									        <label for="inputPassword" class="control-label col-xs-2">Documents Required</label>
									        <div class="col-xs-10">
									           <select class="form-control" name="required_field[]" id="required_field" multiple="">
									            <option  > --SELECT---</option>
									            @foreach($docu_required as $key=> $val)
												  <option value="{{$val->id}}">{{$val->required_field}}</option>
												 @endforeach
												</select>
									            
									        </div>
									    </div>





									    
									    <div class="form-group">
									        <div class="col-xs-offset-2 col-xs-10">
									            <input type="submit" class="btn btn-primary" value="SUBMIT"> 									        </div>
									    </div>
									</form>
															 
								
					            </div>
					            </div>
								<!-- Body Content Start ---->
								



@endsection		

 