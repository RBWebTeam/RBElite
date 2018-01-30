<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Finmart - Login</title>
<link type="text/css" rel="stylesheet" href="{{url('stylesheets/sidebar.css')}}">
	<link type="text/css" rel="stylesheet" href="{{url('stylesheets/bootstrap.min.css')}}"> 
	<link type="text/css" rel="stylesheet" href="{{url('stylesheets/style.css')}}">

	<link type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	<script type="text/javascript" src="{{url('javascripts/jquery.min.js')}}"></script>
	 <script type="text/javascript" src="{{url('javascripts/bootstrap.min.js')}}"></script>
	 <script type="text/javascript" src="{{url('javascripts/filter.js')}}"></script>
	 <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <script type="text/javascript" src="{{url('javascripts/bootstrap-datepicker.js')}}"></script>
	 <link href="{{url('stylesheets/datepicker.css')}}" rel="stylesheet" type="text/css" />
</head>

<body  >
	
	<div class="continer">
	</br></br></br></br>
	 <div class="col-md-4"></div>
		<div class="col-md-4">
		<div class="login">
			<div class="logo-bg"><img src=" " class="img-responsive img-center"/></div>
			<div class="login-bdy">
			 <h2 class="text-center">SIGN IN</h2>
			 <br>
			<form action="{{url('admin-login')}}" method="post" >
							{{ csrf_field() }}
			   <div class="form-group">
			  <input type="text" name="email" class="form-control input-cs" placeholder="email"  />
			  @if ($errors->has('email'))<label class="control-label" for="inputError"> {{ $errors->first('email') }}</label>  @endif
			  </div>
			  <div class="form-group">
			  <input type="password" name="password" class="form-control input-cs" placeholder="Password"  />
			   @if ($errors->has('password')) <label class="control-label" for="inputError">{{ $errors->first('password') }} </label> @endif
			  </div>
			  <div class="form-group has-error">
                                @if (Session::has('msg')) <label class="control-label" for="inputError">{{ Session::get('msg') }} </label>@endif
               </div>

			  <input type="submit" class="btn btn-default submit-btn"/>
			  <a href="" class="forgot-pass pull-right">Forgot Password</a>
			 </form>
			</div>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
	
</body>
</html>
