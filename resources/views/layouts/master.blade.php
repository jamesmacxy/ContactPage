<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Contact</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	
	<div class="container">
		@yield('content')
	</div>
	
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>