<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<h1>A message from Haznepz Contact Page</h1>

	<div class="container">
		<div class="row">
			<h2>Client Name: {{ $firstname }} {{ $lastname }}</h2>
			<h3>Client Email: {{ $email }}</h3>
			<h3>{{ \Carbon\Carbon::now('Asia/Singapore')->format('M d, Y H:i A') }}</h3>
			
			<h2>Message:</h2>
			<h3>{{ $description }}</h3>
		</div>
	</div>
	
	
</body>
</html>