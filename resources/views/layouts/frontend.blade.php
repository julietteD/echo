<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Echo</title>
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
	<link rel="manifest" href="{{ asset('site.webmanifest') }}">

</head>
<body>

	
	<div class="container">

		@include('includes.header')
		
		<main>
			<div class="wrapper">
			@yield('content')
</div>
		</main>
		
		@include('includes.footer')
		
	</div>

</body>
</html>