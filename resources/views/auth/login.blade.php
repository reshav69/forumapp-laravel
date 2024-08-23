@extends("layouts.application")

@section('content')
<div class="main">
	<div class="container">
		<h1>Login</h1>
		<form action="{{route('login')}}" method="post">
			<fieldset>
				@csrf
				<div class="form-group">
					<label for="email">Email</label><br>
					<input type="text" name="email" id="email"><br>
				</div>
				<div class="form-group">
					<label for="password">password</label><br>
					<input type="password" name="password" id="password"><br>
				</div>
				<div class="form-group">
					<input type="submit">
				</div>
				<div class="text-error">
					@error('email')
					@include('includes.error-message')
					@enderror
					@error('password')
					@include('includes.error-message')
					@enderror

				</div>
				<a href="{{route('register')}}" class="text-primary is-center">
					No account? Register here
				</a>
			</fieldset>
		</form>
	</div>
</div>

@endsection