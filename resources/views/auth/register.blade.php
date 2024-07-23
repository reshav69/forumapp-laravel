@extends("layouts.application")

@section('content')

<form action="{{route('register')}}" method="post">
	@csrf
	<h3>Register</h3>
	@error('name')
		{{$message}}
	@enderror
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
	</div><div class="form-group">
		<label for="password_confirmation">Confirm Password</label><br>
		<input type="password" name="password_confirmation" id="cpassword"><br>
	</div>
	<div class="form-group">
		<br>
		<input type="submit">
	</div>
</form>
@endsection