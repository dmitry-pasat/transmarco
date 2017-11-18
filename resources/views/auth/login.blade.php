
	@extends('layouts.auth')

	@section('content')
	
		<div id="signin-page-content">
		
			<form method="POST" action="{{ url('/auth/login') }}" class="form">
			
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
						
				@include('auth.logo')
				
				<h1 class="block-heading">Web88 Admin Login</h1>

				<p>Please enter your login details to access admin area.</p>
				
				@if (count($errors) > 0)
					
					<div class="alert alert-danger">
					
						<strong>Whoops!</strong> There were some problems with your input.<br><br>
						
						<ul>
							@foreach ($errors->all() as $error)
							
								<li>{{ $error }}</li>
								
							@endforeach
						</ul>
						
					</div>
					
				@endif				

				<div class="form-group">
				
					<div class="input-icon"><i class="fa fa-user"></i><input type="email" placeholder="E-Mail Address" name="email" class="form-control" value="{{ old('email') }}" required></div>
					
				</div>
				
				<div class="form-group">
				
					<div class="input-icon"><i class="fa fa-key"></i><input type="password" placeholder="Password" name="password" class="form-control" required></div>
					
				</div>
								
				<div class="form-group">
					
						<div class="checkbox"><label><input type="checkbox" name="remember">&nbsp;
					Remember me</label></div>
				
				</div>
				
				<div class="form-group">
					
					<button type="submit" class="btn btn-primary">Login
					&nbsp;<i class="fa fa-chevron-circle-right"></i></button>
					<a id="btn-forgot-pwd" href="{{ url('/password/email') }}" class="mlm">Forgot your password?</a>
					
				</div>
				
				<hr>
				
				@include('auth.footer')	
		
			</form>
			
		</div>	

	@endsection
