<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	<title>Forum</title>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	{{-- <link rel="stylesheet" href="{{ asset('css/forum.css') }}"> --}}

	<link rel="stylesheet" href="{{asset('css/chota.css')}}">
</head>
<body>
	<div class="main-container">
		<div class="header">
			<header>
				@include('layouts.navbar')
			</header>		
		</div>
		@yield('content')

	</div>
</body>
</html>