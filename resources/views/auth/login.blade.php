@extends("layouts.application")

@section('content')

<form action="{{route('login')}}" method="post">
	@csrf
	<h3>Login</h3>
	<div class="form-group">
		<label for="email">Email</label><br>
		<input type="text" name="email" id="email"><br>
	</div>
	<div class="form-group">
		<label for="password">password</label><br>
		<input type="password" name="password" id="password"><br>
	</div>
	<div class="form-group">
		<br>
		<input type="submit">
	</div>
</form>
@endsection