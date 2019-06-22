<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> 
		@yield('title', 'KingsTour')
	</title>
	<link rel="stylesheet" href="{{ asset('css/w3.css') }}">
	<link rel="stylesheet" href="{{ asset('css/index.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
</head>
<body>
	<div class="w3-bar main-bar w3-transparent w3-top">
		<a href="#" class="w3-btn w3-bar-item w3-wide w3-opacity w3-hover-opacity-off w3-hover-none w3-transition-05 w3-transparent w3-animate-left w3-xlarge"> <b>NOMADIC</b> </a>
		<a href="#" class="w3-right w3-bar-item w3-btn w3-opacity w3-hover-opacity-off w3-hover-none w3-transition-05 w3-transparent w3-animate-left w3-large w3-wide"> LOG IN </a>
		<a href="#" class="w3-right w3-bar-item w3-btn w3-opacity w3-hover-opacity-off w3-hover-none w3-transition-05 w3-transparent w3-animate-left w3-large w3-wide"> CONTACT </a>
		<a href="#" class="w3-right w3-bar-item w3-btn w3-opacity w3-hover-opacity-off w3-hover-none w3-transition-05 w3-transparent w3-animate-left w3-large w3-wide"> OFFERS </a>
		<a href="#" class="w3-right w3-bar-item w3-btn w3-opacity w3-hover-opacity-off w3-hover-none w3-transition-05 w3-transparent w3-animate-left w3-large w3-wide"> ABOUT US </a>
		<a href="#" class="w3-right w3-bar-item w3-btn w3-opacity w3-hover-opacity-off w3-hover-none w3-transition-05 w3-transparent w3-animate-left w3-large w3-wide"> HOME </a>
	</div>
	@yield('content')
</body>
</html>