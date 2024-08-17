<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<nav class="navbar">
	<ul>
		<li><a href="{{route('root')}}">Home</a></li>
		<li><a href="#news">Coming</a></li>
		<li><a href="#contact">Soon</a></li>


		<li style="float:right"><a href="{{route('forums.create')}}">Create</a></li>
		@guest
			<li style="float:right"><a href="{{route('login')}}">Login</a></li>
			<li style="float:right"><a href="{{route('register')}}">Register</a></li>
		@endguest
		@auth
			<li style="float:right; background: green;"><a href="{{route('profile.show',auth()->user())}}">{{auth()->user()->name}}</a></li>
			<li style="float:right">
				<form action="{{route('logout')}}" method="post">
					@csrf
					<button type="submit" class="log-but">Logout</button>

				</form>
			</li>
		@endauth
		@include("layouts.search-bar")
	</ul>
</nav>