<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	<title>Forum</title>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
	<header>
		@include('layouts.navbar')
	</header>
	<div>
		@yield('content')
	</div>
</body>
</html>