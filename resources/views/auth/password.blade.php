	
	@extends('layouts.auth')

	@section('content')

		<div id="signin-page-content">
		
			<form method="POST" action="{{ url('/password/email') }}" class="form">
		
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
		
				@include('auth.logo')
		
				<h1 class="block-heading">Forgot Your Password?</h1>

				<p>Please enter your registered email to reset the password.</p>

				@if (session('status'))
					
					<div class="alert alert-success">
					
						{{ session('status') }}
						
					</div>
					
				@endif

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
				
					<div class="input-icon"><i class="fa fa-user"></i><input type="email" placeholder="Your Email" name="email" class="form-control" value="{{ old('email') }}" required></div>
					
				</div>
        
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Reset Password
						&nbsp;<i class="fa fa-chevron-circle-right"></i></button>
						<a id="btn-forgot-pwd" href="{{ url('/auth/login') }}" class="mlm">Return to Login Page</a>
				</div>
				
				<hr>
				
				@include('auth.footer')	
					
			</form>
	
		</div>

	@endsection
