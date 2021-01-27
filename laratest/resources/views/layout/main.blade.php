<!DOCTYPE html>
<html>
<head>
	<title> @yield('title') </title>
</head>
<body>

	<h1> @yield('head') </h1>

	<div id="navbar">
		 @yield('navbar')
	</div>

	<div id="content">
		@yield('content')
	</div>

	<div id="footer">
		copyright@2020
	</div>

</body>
</html>