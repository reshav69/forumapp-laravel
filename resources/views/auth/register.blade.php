@extends("layouts.application")

@section('content')
<div class="main">
	<div class="container">
		<h1>Register</h1>
		<form action="{{route('register')}}" method="post">
			<fieldset>		
				@csrf

				<div class="form-group">
					<label for="name">Name</label><br>
					<input type="text" name="name" id="name"><br>
				</div>
				<div class="form-group">
					<label for="email">Email</label><br>
					<input type="text" name="email" id="email"><br>
				</div>
				<div class="form-group">
					<label for="password">Password</label><br>
					<input type="password" name="password" id="password"><br>
				</div>
				<div class="form-group">
					<label for="password_confirmation">Confirm Password</label><br>
					<input type="password" name="password_confirmation" id="cpassword"><br>
				</div>
				<div class="form-group">
					<input type="submit">
				</div>

				<div class="text-error">
					@error('name')
						@include('includes.error-message')
					@enderror
					@error('email')
						@include('includes.error-message')
					@enderror
					@error('password')
						@include('includes.error-message')
					@enderror
					@error('password_confirmation')
						@include('includes.error-message')
					@enderror
					
				</div>
				<a href="{{route('register')}}" class="text-primary is-center">
					Have an account? Login here
				</a>
			</fieldset>
		</form>
	</div>
</div>

@endsection