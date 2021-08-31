<!doctype html>
<html lang="en">
  <head>
  	<title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="{{asset('loginAsset/fonts/all.css')}}" rel="stylesheet">

	<!-- <link rel="stylesheet" href="{{asset('loginAsset/fonts/awesome.min.css')}}"> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">	
	<link rel="stylesheet" href="{{asset('loginAsset/css/style.css')}}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Register Page</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user"></span>
                      
		      	</div>
		      	<h3 class="text-center mb-4">Register here</h3>
					<form action="{{route('auth.save')}}" method="post" class="login-form">
					@if(Session::get('success'))
						<div class="alert alert-success">
							{{ Session::get('success') }}
						</div>
                    @endif

					@if(Session::get('fail'))
						<div class="alert alert-danger">
							{{ Session::get('fail') }}
						</div>
					@endif
					
                       @csrf

		      		<div class="form-group">
		      			<input type="text" name="name" class="form-control rounded-left" placeholder="Name" value="{{old('name')}}" >
                          <span class="text-danger">@error('name'){{$message}} @enderror </span>
		      		</div>
                    <div class="form-group">
		      			<input type="text" name="username" class="form-control rounded-left" value="{{old('username')}}" placeholder="Username" >
                          <span class="text-danger">@error('username'){{$message}} @enderror </span>

		      		</div>
                    <div class="form-group">
		      			<input type="text" name="role" class="form-control rounded-left" value="{{old('role')}}" placeholder="Role" >
                          <span class="text-danger">@error('role'){{$message}} @enderror </span>

		      		</div>
                    <div class="form-group">
		      			<input type="text" name="email" class="form-control rounded-left" value="{{old('email')}}" placeholder="Email">
                          <span class="text-danger">@error('email'){{ $message }} @enderror</span>

		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" name="password" class="form-control rounded-left" placeholder="Password">
                  <span class="text-danger">@error('password'){{$message}} @enderror </span>

	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
	            		<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#">Forgot Password</a>
								</div>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Get Started</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('loginAsset/js/jquery.min.js')}}"></script>
  <script src="{{asset('loginAsset/js/popper.js')}}"></script>
  <script src="{{asset('loginAsset/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('loginAsset/js/main.js')}}"></script>

	</body>
</html>

